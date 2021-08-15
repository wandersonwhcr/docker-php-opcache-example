ARG PHP_VERSION

FROM php:${PHP_VERSION}-cli-alpine

RUN docker-php-ext-enable opcache \
    && mkdir -p /var/lib/php/cache \
    && echo "opcache.enable_cli=true" >> /usr/local/etc/php/conf.d/99-opcache.ini \
    && echo "opcache.file_cache=/var/lib/php/cache" >> /usr/local/etc/php/conf.d/99-opcache.ini \
    && echo "opcache.validate_timestamps=false" >> /usr/local/etc/php/conf.d/99-opcache.ini

ENTRYPOINT ["/usr/local/bin/php"]

CMD ["-S", "0.0.0.0:8000", "index.php"]

WORKDIR /app

COPY . .

RUN php opcache.php \
    && rm opcache.php
