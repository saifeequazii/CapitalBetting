FROM php:8-apache

RUN a2enmod ssl && a2enmod rewrite
RUN mkdir -p /etc/apache2/ssl
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY ./cert/server.* /etc/apache2/ssl/
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf
COPY . /var/www/html/
EXPOSE 80
EXPOSE 443