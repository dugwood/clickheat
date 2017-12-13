FROM php:7-apache

LABEL maintainer="Senio Caires <seniocaires@gmail.com>"

ARG CONTEXT_PATH

COPY . "/var/www/html/$CONTEXT_PATH"

RUN apt-get update \
    && apt-get install -y libpng-dev \
    && docker-php-ext-install gd \
    && mkdir -p "/var/www/html/$CONTEXT_PATH/logs/" \
    && chown -R 33:33 /var/www/html
