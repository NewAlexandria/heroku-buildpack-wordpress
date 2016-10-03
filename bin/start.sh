#!/usr/bin/env bash

echo "Starting nginx"
setup.sh
(tail -qF -n 0 /app/vendor/nginx/logs/*.log /app/vendor/php/var/log/*.log &)
php-fpm
nginx
