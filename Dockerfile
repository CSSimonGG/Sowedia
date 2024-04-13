# Dockerfile
FROM php:8.2-cli

RUN apt-get update -y && apt-get install -y libmcrypt-dev

COPY . /var/www/html
WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring

RUN composer install

EXPOSE 5005
CMD php artisan serve --host=0.0.0.0 --port=5005