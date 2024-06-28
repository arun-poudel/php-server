# Dockerfile
FROM php:7.4-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Set the working directory
WORKDIR /var/www/html
