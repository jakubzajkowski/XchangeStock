# Use the official PHP image as the base image
FROM php:8.0-fpm

# Set the working directory inside the container
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy your Laravel app files into the container
COPY . .

# Install app dependencies using Composer
RUN composer install

# Expose the port on which the PHP-FPM server runs
EXPOSE 9000

# Start the PHP-FPM server
CMD ["php-fpm"]