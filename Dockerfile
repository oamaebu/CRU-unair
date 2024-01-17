# Use an official PHP runtime as a parent image
FROM php:8.2-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
        git \
        zip \
        unzip \
        libpng-dev \
        libonig-dev \
        libxml2-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer.json and composer.lock to the working directory
COPY composer.json composer.lock ./

# Install project dependencies
RUN composer install --no-scripts --no-autoloader

# Copy the application code into the container
COPY . .

# Generate the optimized autoload files
RUN composer dump-autoload --optimize

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Install Sanctum and publish configuration
RUN composer require laravel/sanctum
RUN php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

# Run migrations and seed the database
RUN php artisan migrate --force
RUN php artisan migrate --seed --force

# Expose port 80 and start Apache
EXPOSE 80
CMD ["apache2-foreground"]
