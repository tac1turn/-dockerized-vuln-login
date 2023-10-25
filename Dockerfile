# Use the official PHP image as the base image
FROM php:apache
COPY . /var/www/html/
# Install the mysqli extension
RUN docker-php-ext-install mysqli
