# syntax=docker/dockerfile:1

FROM php:8.1-apache

RUN apt update -y
RUN apt install -y git zip unzip
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY docker/default-ssl.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default

RUN mkdir -p /var/www/html
RUN rm -rf /var/www/html/*
WORKDIR /var/www/html/

ENV APP_ENV="dev"

USER root

EXPOSE 8000