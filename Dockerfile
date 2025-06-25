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
