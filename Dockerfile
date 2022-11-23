FROM php:8.0-apache

RUN apt-get update && apt-get upgrade -y && apt install git -y
RUN git clone https://github.com/phpredis/phpredis.git && cd phpredis && phpize && ./configure && make && make install && echo "extension = redis.so" >>  /usr/local/etc/php/php.ini
RUN a2enmod ssl && a2enmod rewrite
RUN mkdir -p /etc/apache2/ssl
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY ./cert/server.* /etc/apache2/ssl/
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf
COPY . /var/www/html/
EXPOSE 80
EXPOSE 443
#docker run -d -v $(pwd):/var/www/html/ -p 80:80 test