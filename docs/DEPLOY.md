# How production runs

Some of this lives in Coolify rather than in the repo. It's written down here
so it doesn't have to be rediscovered. Last checked 26 September 2026.

## Where it runs

- **Coolify Cloud** (app.coolify.io): team "Vegan Hacktivists's Team", project
  "5 Minutes 5 Vegans", environment "production", application
  "5m5v-website", on the server `hetzner-1`.
- **Deploys:** a GitHub webhook deploys every push to master. Builds take
  roughly four to eight minutes. During a rolling update the old and new
  containers both answer for a few minutes, so a check right after a merge can
  still hit the old one. Coolify also has a Rollback page.
- **Build:** nixpacks (`nixpacks.toml`) with PHP 8.4, Node 24 and
  `composer install --no-dev`, so dev packages such as tinker aren't in
  production.
- **Traffic path:** Cloudflare, then Coolify's proxy (Traefik), then nginx in
  the container, then php-fpm running as www-data. Every request reaches the
  app from the proxy's address. The nginx access log in Coolify's Logs shows
  172.18.0.22. See "Visitor IP" in [AGENTS.md](../AGENTS.md).
- **Redirects:** a Cloudflare Redirect Rule in the 5minutes5vegans.org zone,
  "Main site: www and http to https (301)", sends GET and HEAD requests for
  `www.5minutes5vegans.org`, and for `http://5minutes5vegans.org`, to
  `https://5minutes5vegans.org` with a 301. It keeps the path and query string.
  Other methods, like the bot's POST, still get Coolify's 307, which keeps the
  method. "Always Use HTTPS" is off because `dev.` and `new.5minutes5vegans.org`
  only answer over plain HTTP, and it would send them to an HTTPS that gives
  Cloudflare error 526.

## Starting up

`nixpacks/start.sh` runs, in order:
1. the migrations
2. `optimize --except=routes`, which caches config, events and views
3. `tweets:generate`, to fill the replies cache
4. the nginx config is generated from `nixpacks/nginx.template.conf`
5. php-fpm, then supervisor, then nginx

It stops at the first step that fails, apart from `tweets:generate`. If
generation fails, the site starts anyway, and the scheduler tries again within
ten minutes.

## Background jobs

Supervisor runs two programs:
- the queue worker, from `nixpacks/laravel-worker.conf`
- the scheduler, `php artisan schedule:work`, from
  `nixpacks/laravel-scheduler.conf`

The scheduler runs:
- `tweets:generate` every ten minutes. It never overlaps itself. If it keeps
  failing, admin@veganhacktivists.org gets an email at most every six hours.
- `tweets:prune` daily at midnight UTC. It removes posts older than 60 days
  (the feed doesn't show them) and keeps the newest 500 per language.

Coolify's scheduled task "Run scheduled jobs" (`php artisan schedule:run`,
every minute) ran the schedule before the in-container scheduler existed. It's
been **disabled** since 25 September 2026 rather than deleted. If the
in-container scheduler ever stops, enable it again from the task's page.

To check the scheduler, open the app's Terminal in Coolify and run:

```bash
supervisorctl -c /etc/supervisord.conf status
```

```bash
tail -n 6 /var/log/laravel-scheduler.log
```

`laravel-scheduler` should say RUNNING, and the log should show
`tweets:generate` finishing every ten minutes.

## Health check

Coolify checks `GET http://localhost:80/up` inside the container. It expects
a 200 whose body contains `up`. It waits 90 seconds before the first check,
then checks every 30 seconds, with a 5-second timeout and 10 retries.

`/up` returns 200 when the app can reach its database and 503 when it can't.
It uses no session or cookies.

## Environment variables

These are set in Coolify under Environment Variables. Only the names are
written here.

| Variable | What it's for |
| --- | --- |
| `APP_ENV` | `production`. That turns on the https handling, HSTS and secure cookies. |
| `APP_KEY`, `APP_URL` | Laravel's own. |
| `DB_*` | The MySQL database. |
| `API_KEY` | Shared with the bot, which sends it as `X-API-KEY`. |
| `SHLINK_API_KEY` | Short links on go.veganhacktivists.org. Without it the replies use full links. |
| `NOCAPTCHA_SITEKEY`, `NOCAPTCHA_SECRET` | reCAPTCHA at sign-up. Without the secret, registration returns 503. |
| `UMAMI_WEBSITE_ID`, `UMAMI_SCRIPT_URL` | Analytics at analytics.veganhacktivists.org. With no ID, nothing is tracked. |
| `COOLIFY_PROXY_IPS` | `172.18.0.0/16`, the proxy's Docker network. Without it every visitor shares one set of sign-up and login limits. |
| `MAIL_*` | Password reset emails and the failure alerts. |
| `SENTRY_LARAVEL_DSN`, `SENTRY_TRACES_SAMPLE_RATE` | Error tracking, if it's set up. |

Checked in the container on 26 September 2026:
- The cache and sessions use `file`, the queue is `sync` and mail is `smtp`.
- `storage/` persists across deploys (its logs go back to 2025), so the cache
  and sessions survive a deploy.
- Files under `storage/` are owned by root but writable by everyone, so
  php-fpm (www-data) can write what the root scheduler creates.
- Nothing is ever queued with `sync`, so the queue worker has nothing to do.

## Analytics

Umami is cookieless, so there's no consent banner. It records page views and
these events:
- Copy reply
- Copy failed
- Reword
- Open post
- How it works

Each event carries the page's language, plus the topic for ready-made replies.
Nothing about the visitor is sent. The password reset page isn't tracked,
because its address holds the reset token.
