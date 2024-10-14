# Use an official PHP runtime
FROM php:8.2-apache

# Enable Apache modules
RUN a2enmod rewrite

# Install dependencies including libzip-dev for php-zip extension
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the source code in /www into the container at /var/www/html
COPY ../www .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Run Composer install
RUN composer install
