FROM php:7.2-apache 

RUN mkdir -p /var/www/website

COPY . /var/www/website

RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev
RUN pecl install xdebug

RUN apt-get install git -y

# symbolic link from source to destination

RUN apt-get install nodejs npm -y
RUN npm install -g bower

COPY ./docker/php/base.conf /etc/apache2/sites-available/base.conf
COPY ./docker/php/php.ini /usr/local/etc/php/
RUN a2ensite base.conf

WORKDIR /var/www/website
RUN chgrp -R www-data /var/www/website
RUN chmod -R 755 /var/www/website
EXPOSE 80