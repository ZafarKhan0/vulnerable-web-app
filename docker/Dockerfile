FROM php:7.4-apache
WORKDIR /var/www/html
COPY src/ .
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli