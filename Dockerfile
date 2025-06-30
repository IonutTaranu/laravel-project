<<<<<<< HEAD
FROM php:8.3-fpm

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    npm \
    nodejs

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u 1000 -d /home/laravel laravel
RUN mkdir -p /home/laravel/.composer && \
    chown -R laravel:laravel /home/laravel

# Set user
USER laravel

# Copy existing application directory contents
COPY --chown=laravel:laravel . /var/www/html

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
=======
FROM php:8.2-apache

# Instalăm extensii necesare Laravel + dependințe pt. mbstring (oniguruma)
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git libonig-dev \
    && docker-php-ext-install pdo_mysql zip mbstring

# Activăm mod_rewrite pentru Apache (necesar Laravel)
RUN a2enmod rewrite

# Setăm document root spre folderul public din Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Înlocuim document root în fișierele de configurare Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Setăm directorul de lucru
WORKDIR /var/www/html
>>>>>>> 42956b651617e0d39d431bbe3a766d6d833c76e4
