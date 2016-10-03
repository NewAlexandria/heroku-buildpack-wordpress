#!/usr/bin/env bash

cp -rf /app/config/* /app

cp /app/vendor/php/php/fpm/status.html /app/public/status.html
erb /app/vendor/nginx/conf/wordpress.conf.erb > /app/vendor/nginx/conf/wordpress.conf
chmod 755 /app/public/wp-content

# Expose Heroku config vars to PHP-FPM processes
for var in `env | cut -f1 -d=`; do
  echo "env[$var] = \$${var}" >> /app/vendor/php/etc/php-fpm.conf
done

touch /app/vendor/nginx/logs/access.log /app/vendor/nginx/logs/error.log /app/vendor/php/var/log/php-fpm.log
