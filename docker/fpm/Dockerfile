FROM php:8.2-fpm-alpine

WORKDIR /var/www/laravel

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN docker-php-ext-install pdo pdo_mysql

