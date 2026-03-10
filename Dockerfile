FROM php:8.4-apache

RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libsqlite3-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite pdo_pgsql zip

RUN a2enmod rewrite

RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html
COPY . .

RUN curl -sS https://getcomposer.org/installer | php \
 && mv composer.phar /usr/local/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN touch database/database.sqlite

RUN chown -R www-data:www-data storage bootstrap/cache database

RUN php artisan migrate --force

EXPOSE 80