# Use an official PHP image as the base image
FROM php:8.0-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Set the working directory to /var/www/html
WORKDIR /var/www/html
