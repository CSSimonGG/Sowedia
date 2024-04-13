# Dockerfile
FROM php:8.2 as php

RUN apt-get update -y && apt-get install -y libmcrypt-dev

WORKDIR /var/www
COPY . .

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring

ENV PORT=5005
ENTRYPOINT [ "docker/entrypoint.sh" ]