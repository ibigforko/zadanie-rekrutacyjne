#!/bin/sh

php artisan route:cache
php artisan cache:clear
php artisan config:cache
php artisan view:clear
composer dump-autoload