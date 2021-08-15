ARG PHP_VERSION

FROM php:${PHP_VERSION}-cli-alpine

RUN docker-php-ext-enable opcache

ENTRYPOINT ["/usr/local/bin/php"]

CMD ["-S", "0.0.0.0:8000", "index.php"]

WORKDIR /app

COPY . .
