FROM php:7.1-fpm

ENV PATH /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin

RUN apt-get update && apt-get upgrade -y \
    && docker-php-ext-install -j$(nproc) pdo_mysql mysqli

WORKDIR /application
