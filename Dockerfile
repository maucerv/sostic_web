FROM php:8.2-apache
COPY . /var/www/html/
RUN CHOWN -R www-data:www-data /var/www/html \ 
    &6 chmod -R 755 /var/www/html
    RUN a2enmod rewrite
EXPOSE 80