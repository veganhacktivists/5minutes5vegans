#!/bin/bash

# Stop at the first step that fails, so a failed migration can't leave the
# app starting on a half-migrated database
set -e

# Run Laravel migrations
php artisan migrate --force

# Cache Laravel views
php artisan view:cache

# Cache Laravel config
php artisan config:cache

# Clear cache
php artisan cache:clear

# Optimize Laravel
php artisan optimize

# Clear Laravel routes
php artisan route:clear

# Cache verbiages. It exits 1 if any language fails, which mustn't stop the
# site starting: the scheduler tries again every minute.
php artisan tweets:generate || echo "tweets:generate failed, the scheduler will retry"

# Transform the nginx configuration
node /assets/scripts/prestart.mjs ./nixpacks/nginx.template.conf /etc/nginx.conf

# Start PHP-FPM
php-fpm -y ./nixpacks/php-fpm.conf

# Start Supervisor
supervisord -c /etc/supervisord.conf

# Start Nginx
nginx -c /etc/nginx.conf
