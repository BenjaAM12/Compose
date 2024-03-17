FROM php:7.4-apache

# Instalación de extensiones PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY ./src /var/www/html

WORKDIR /var/www/html

RUN a2enmod rewrite

CMD ["apache2-foreground"]