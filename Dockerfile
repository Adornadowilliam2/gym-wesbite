FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application code
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Run database migrations (optional, be cautious)
RUN php artisan migrate:fresh --force --no-interaction

# Generate Passport encryption keys (no interaction)
RUN php artisan passport:keys --no-interaction

# Create a personal access client (no interaction)
RUN php artisan passport:client --personal --no-interaction

# Set permissions
RUN chown -R www-data:www-data /var/www
RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8080

# Run the Laravel server
CMD ["php", "artisan", "serve", "--host=127.0.0.1", "--port=8080"]
