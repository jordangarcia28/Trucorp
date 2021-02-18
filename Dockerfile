FROM php:7.4-apache

RUN docker-php-ext-install mysqli

COPY index.php /var/www/html

RUN chown -R www-data /var/www
RUN chgrp -R www-data /var/www
RUN chmod -R 774 /var/www

EXPOSE 80
