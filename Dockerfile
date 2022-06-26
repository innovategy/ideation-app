FROM php:8.0-fpm-alpine3.14

WORKDIR /var/www

RUN apk update && apk add \
    build-base \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    postgresql-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    bash

RUN docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache
RUN docker-php-ext-install pdo pdo_pgsql zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install Redis Extension
RUN apk add autoconf && pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis && apk del autoconf

# Copy config
COPY docker/php/php.ini /usr/local/etc/php/conf.d/local.ini

RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www

USER www

COPY --chown=www:www . /var/www

COPY --chown=www:www docker/php/start.sh start-as-application.sh
COPY --chown=www:www docker/queue-consumer/start.sh start-as-worker.sh

RUN chmod +x start-as-application.sh

RUN chmod +x start-as-worker.sh

EXPOSE 9000
