FROM php:7.3-cli

RUN curl https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer | php -- --quiet \
    && mv composer.phar /usr/bin/composer \
    && apt-get update \
    && apt-get install -y libzip-dev zlib1g-dev \
    && docker-php-ext-install zip

# enable phpdebug
RUN apt-get install -y libxml2-dev \
    && docker-php-source extract \
    && cd /usr/src/php \
    && ./configure --enable-phpdbg \
&& docker-php-source delete

WORKDIR /srv/rest-daemon-example
