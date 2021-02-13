FROM phpdockerio/php80-fpm:latest
WORKDIR "/application"

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y install php8.0-gmp php8.0-pgsql php8.0-bcmath imagemagick php8.0-imagick nano \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

COPY ./docker/php-fpm/php-ini-overrides.ini /etc/php/8.0/fpm/conf.d/99-overrides.ini
COPY ./ /application

RUN rm -rf /application/docker && chmod -R 777 /application/bootstrap && chmod -R 777 /application/storage

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
