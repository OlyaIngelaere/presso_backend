# Use the official PHP image with required extensions
FROM php:8.4-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing app code
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www

# Set environment variables (Render will overwrite with your dashboard values)
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/database/database.sqlite

# Create empty SQLite database if not exists
RUN touch /var/www/database/database.sqlite

# Expose port (Render expects 8080)
EXPOSE 8080

# Start Laravel with PHP's built-in server
CMD php artisan config:cache && php artisan serve --host=0.0.0.0 --port=8080
