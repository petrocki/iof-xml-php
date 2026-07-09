FROM php:8.3

COPY --from=composer:2.10.2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/iof-xml-php

ENTRYPOINT ["bash", "-c"]