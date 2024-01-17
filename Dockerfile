# Use the official PHP image with Apache
FROM php:8.0-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        unzip \
        git \
    && docker-php-ext-install zip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql bcmath

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the composer files and install dependencies
COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install --no-scripts --no-autoloader

# Copy the rest of the application code
COPY . .

# Generate the Laravel application key
RUN php artisan key:generate

# Run Composer with autoloader optimization
RUN composer dump-autoload --optimize

# Set the correct permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
