FROM php:7.2-apache 

RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev
RUN pecl install xdebug

COPY ./docker/php/base.conf /etc/apache2/sites-available/base.conf

COPY ./docker/php/php.ini /usr/local/etc/php/

FROM ubuntu:18.04

USER root
RUN apt-get update
RUN apt-get install curl -y
RUN apt-get install build-essential g++ gcc make cmake -y
RUN mkdir /home/project
RUN apt-get install git -y
WORKDIR /home/project

EXPOSE 8080