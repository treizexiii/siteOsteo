FROM php:8.1-apache
RUN apt-get update && apt-get install -y apt-transport-https
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
COPY . /var/www
COPY 000-default.conf /etc/apache2/sites-available

WORKDIR /var/www
RUN composer dump-autoload
RUN a2enmod rewrite && service apache2 restart