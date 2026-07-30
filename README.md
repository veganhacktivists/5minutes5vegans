# 5 Minutes 5 Vegans

[![](https://img.shields.io/badge/community-discord-black?style=flat-square&labelColor=000&color=7289da)](https://discord.com/channels/829144774929940550/829184417611776052)
[![](https://img.shields.io/badge/sponsor-patreon-black?style=flat-square&labelColor=000&color=ff424d)](https://patreon.com/veganhacktivists)
[![](https://img.shields.io/badge/trello-vh--playground-black?style=flat-square&labelColor=000&color=026aa7)](https://trello.com/b/J3JW43mY/vh-playground)
[![](https://img.shields.io/badge/website-5minutes5vegans.org-black?style=flat-square&labelColor=000&color=ff0097)](https://5minutes5vegans.org)

Our vegan robots are constantly scanning social media for people we think are
looking for help with going vegan. Use our site to quickly find folks, find,
copy, and edit relevant helpful resources, and offer support to potential vegans
in seconds! In just 5 minutes you can help 5 or more people become vegan.

## Setup

Laravel 12 on PHP 8.3, run through [Laravel Sail](https://laravel.com/docs/12.x/sail),
which brings up the app, MariaDB and MailHog in Docker. The front end needs
Node 22 and pnpm.

```
cp .env.example .env
composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
./vendor/bin/sail pnpm install
./vendor/bin/sail pnpm dev
```

The site is then at http://localhost and MailHog at http://localhost:8025. Run
the tests with `./vendor/bin/sail artisan test`.

Without PHP and Composer on your machine, run that first `composer install` in a
container instead — see
[Executing Composer Commands](https://laravel.com/docs/12.x/sail#executing-composer-commands).
