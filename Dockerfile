FROM php:7.4-apache

WORKDIR /var/www/html

RUN apt update
RUN apt -y install git

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install exif
RUN apt -y install libzip-dev libpng-dev zip
RUN docker-php-ext-install gd

RUN pecl install xdebug \
  && echo "xdebug.remote_log=/var/www/html/xdebug.log" >> /usr/local/etc/php/conf.d/xdebug.ini \
  && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
  && echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
  && echo "xdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN docker-php-ext-enable xdebug

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

# RUN echo "Listen :8080 >> /etc/apache2/apache2.conf"
