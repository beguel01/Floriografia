FROM php:8.3-apache

RUN apt-get update && apt-get install -y git libonig-dev \
    && docker-php-ext-install mbstring
WORKDIR /var/www/html
COPY . /var/www/html/

EXPOSE 80
