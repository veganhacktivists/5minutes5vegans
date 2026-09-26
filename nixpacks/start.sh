#!/bin/bash
# Stop at the first failure, except reply generation below
set -e

php artisan migrate --force

# Not routes: they depend on the locale in the URL
php artisan optimize --except=routes

# Allowed to fail: the last good replies stay cached and the scheduler retries
php artisan tweets:generate || echo "tweets:generate failed, the scheduler will retry"

node /assets/scripts/prestart.mjs ./nixpacks/nginx.template.conf /etc/nginx.conf

php-fpm -y ./nixpacks/php-fpm.conf

supervisord -c /etc/supervisord.conf

nginx -c /etc/nginx.conf
