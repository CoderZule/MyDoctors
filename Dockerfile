FROM php:8.2-fpm

# Install system dependencie
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application code
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Clear Laravel caches
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# Make the startup script executable
RUN chmod +x start.sh

# Expose port 8080
EXPOSE 8080

# Run migrations, seeders, and start the Laravel server
CMD ["./start.sh"]