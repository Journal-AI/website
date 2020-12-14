FROM php:7.2-apache 

RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev
RUN pecl install xdebug

COPY ./docker/php/base.conf /etc/apache2/sites-available/base.conf

COPY ./docker/php/php.ini /usr/local/etc/php/

RUN mkdir /home/project
RUN apt-get install git -y
WORKDIR /home/project

# symbolic link from source to destination
RUN ln -s /home/project /var/www/app

RUN a2ensite base.conf

RUN apt-get install nodejs npm -y
RUN npm install -g bower

EXPOSE 8080