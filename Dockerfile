FROM php:8.2-apache

# Install mysqli
RUN docker-php-ext-install mysqli

# Fix MPM conflict (IMPORTANT)
RUN a2dismod mpm_event || true
RUN a2dismod mpm_worker || true
RUN a2enmod mpm_prefork

# Copy project files
COPY . /var/www/html/

EXPOSE 80
