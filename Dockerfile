FROM php:8.2-apache

# Enable mysqli
RUN docker-php-ext-install mysqli

# Fix Apache MPM issue
RUN a2dismod mpm_event && a2enmod mpm_prefork

COPY . /var/www/html/

EXPOSE 80
