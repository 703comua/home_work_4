FROM php:7.4.1-apache
COPY docker /usr/local/etc/php/
COPY .. /src/app
COPY docker /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install pdo_mysql