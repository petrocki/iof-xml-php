FROM php:8.3

RUN apt-get update && apt-get install -y
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip

COPY --from=composer:2.10.2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/iof-xml-php

ENTRYPOINT ["bash", "-c"]