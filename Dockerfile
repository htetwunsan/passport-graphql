FROM php:8.1.15-fpm-alpine3.17

RUN set -ex && apk --no-cache add postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY ./ ./

RUN composer install
