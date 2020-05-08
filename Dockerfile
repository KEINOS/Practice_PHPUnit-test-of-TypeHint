FROM composer:latest

COPY . /app

WORKDIR /app

RUN \
    composer install && \
    composer test
