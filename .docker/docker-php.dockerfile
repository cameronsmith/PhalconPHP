FROM php:7.2-fpm

MAINTAINER Cameron Smith

RUN pecl install phalcon \
    && docker-php-ext-enable psr \
    && docker-php-ext-enable phalcon
