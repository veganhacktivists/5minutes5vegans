#!/bin/bash
# Stop at the first failed step, so a failed migration can't start the app on
# a half-migrated database. Reply generation below is the one exception.
set -e

# Run Laravel migrations
php artisan migrate --force

# Cache Laravel views
php artisan view:cache

# Cache Laravel config
php artisan config:cache

# Optimize Laravel
php artisan optimize

# Clear Laravel routes
php artisan route:clear

# Cache verbiages. It exits 1 if any one language fails. That mustn't keep the
# whole site down: the cache still holds the last good replies unless this is
# a fresh container, the page shows a "didn't load" message if not, and the
# scheduler tries again every minute.
php artisan tweets:generate || echo "tweets:generate failed, the scheduler will retry"

# Transform the nginx configuration
node /assets/scripts/prestart.mjs ./nixpacks/nginx.template.conf /etc/nginx.conf

# Start PHP-FPM
php-fpm -y ./nixpacks/php-fpm.conf

# Start Supervisor
supervisord -c /etc/supervisord.conf

# Start Nginx
nginx -c /etc/nginx.conf
