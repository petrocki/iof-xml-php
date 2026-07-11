FROM php:8.3

RUN apt-get update && apt-get install -y libzip-dev \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2.10.2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/iof-xml-php

ENTRYPOINT ["bash", "-c"]