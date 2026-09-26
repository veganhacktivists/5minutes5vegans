# Working on 5 Minutes 5 Vegans

Volunteers open the site, pick a post from someone on X who's thinking about
going vegan, copy a ready-made reply and post it. A separate bot
([veganhacktivists/5minutes5vegans-bot](https://github.com/veganhacktivists/5minutes5vegans-bot))
finds the posts and sends them to `POST /api/tweets` with an `X-API-KEY` header.

Read [README.md](README.md) for local setup and [docs/DEPLOY.md](docs/DEPLOY.md)
for how production runs.

## Stack

- Laravel 13 on PHP 8.4, still on the older `app/Http/Kernel.php` layout.
- Vue 3 components in `resources/js/components`, alongside jQuery, Bootstrap 5.3
  and Swiper 12, built by Vite with pnpm.
- Seven languages: en, de, es, fr, it, nl and pt. Every page URL starts with the
  locale, as in `/en` or `/de/login`.

## Tests

- **PHP:** `php artisan test`, as CI runs it. The tests use SQLite in memory and
  mock every HTTP call. Production runs MySQL in strict mode, so a string longer
  than its column fails there but passes in the tests.
- **Browser:** Playwright in `tests/browser`, at desktop and phone sizes. The
  README says how to run them. A test fails on any uncaught error, any
  Content-Security-Policy violation, or any failed request to the site itself.
  CI's `browser` job seeds 200 sample posts and a test user, generates the
  replies and serves the app with `php artisan serve --no-reload`.
- Check a fix fails its test without the fix before relying on the test.

## Rules that are easy to break

- **Replies** live in `resources/lang/{locale}/tweets.php` as plain-text parts,
  each a list of options. Every combination has to fit on X, and
  `TweetContentTest` checks that. Links go through `generate_and_cache_shlink()`.
  Leave `#vegan` out, because the site adds it. More in
  [resources/lang/README.md](resources/lang/README.md).
- **Say "posts"** in anything people read, not "tweets". Code and route names
  keep the old word.
- **Colours** come from the Evergreen tokens at the top of
  `resources/sass/_variables.scss`. Each comment gives its contrast on the ground
  it's used on. The browser tests check that small text reaches 4.5:1.
- **Translations:** a new UI string needs a translation in all six
  `resources/lang/{locale}.json` files. They use the informal register (du, tu,
  tú, je, você), and English copy is British English. `de.json`, `es.json` and
  `fr.json` have CRLF line endings, so keep them that way. Nobody has reviewed
  the translations yet.
- **The Content-Security-Policy is enforced**
  (`app/Http/Middleware/ContentSecurityPolicy.php`):
  - Every inline `<script>` needs `nonce="{{ Vite::cspNonce() }}"`.
  - No inline event handlers such as `onclick` or `onerror`. Add listeners in
    JavaScript.
  - A new third-party host has to be added to the policy.
  - Check signed-in pages as well as guest ones. The icon picker for people's
    own messages broke because only guest pages were checked.
- **Visitor IP:** `TrustProxies` trusts Coolify's proxy (`COOLIFY_PROXY_IPS`)
  and Cloudflare's ranges, so `$request->ip()` is the visitor's address. It
  trusts `X-Forwarded-For` only, because the proxy's `X-Forwarded-Proto: http`
  would override `EnforceHttps`. If `COOLIFY_PROXY_IPS` isn't set, `ip()` is
  the proxy's address for everyone and every rate limit covers the whole site.
- **Phone layout:** Swiper owns `.swiper-pagination` and rewrites it. On phones
  the open reply box moves into `#reply-dock` (`toggleVerbiageMsg` in
  `Verbiages.vue`), so leave Swiper's elements alone.
- **Startup:** `nixpacks/start.sh` stops at the first failed step, with one
  exception: `tweets:generate` may fail without stopping the site.
- **Secrets:** none in the repo, fixtures or tests. GitGuardian runs on every
  PR and flags even Google's public reCAPTCHA test key.

## Pull requests

- Open them as drafts, with one commit per change.
- The description says what changed and why, how it was checked, and what
  wasn't checked.
- CI runs build, test, browser and GitGuardian.
- Merging to master deploys to production.
