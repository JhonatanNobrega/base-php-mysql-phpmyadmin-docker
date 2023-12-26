FROM php:8.2-apache

RUN apt-get update && \
    apt-get -y --no-install-recommends install \
    && docker-php-ext-install pdo \ 
    && docker-php-ext-install pdo_mysql

RUN pecl install xdebug-3.3.1 \
    && docker-php-ext-enable xdebug