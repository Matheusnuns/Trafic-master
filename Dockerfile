FROM php:7.3-apache

COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    zip \
    unzip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_mysql gd

RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

RUN composer install --ignore-platform-req=ext-gd

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

RUN php artisan config:cache && \
    php artisan route:cache && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html && \
    a2enmod rewrite

EXPOSE 80

USER www-data

CMD ["/bin/bash", "/var/www/html/scripts.sh"]
