FROM php:7.4-cli-alpine

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . /sandbox

RUN apk add --no-cache --update git
RUN composer install -d /sandbox \
    --no-dev \
    --no-ansi \
    --no-interaction \
    --no-scripts \
    --no-suggest \
    --no-progress \
    --prefer-dist

WORKDIR /app

ENTRYPOINT ["php", "/sandbox/src/index.php"]
