# syntax=docker/dockerfile:1

FROM php:8.1-apache

### Enable apache vhost
COPY docker/default-ssl.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default

### Make sure the /var/www/html directory exists
RUN mkdir -p /var/www/html
# Make sure directory is empty
RUN rm -rf /var/www/html/*
WORKDIR /var/www/html/

ENV APP_ENV="prod"

# Enable root user
USER root

EXPOSE 8000