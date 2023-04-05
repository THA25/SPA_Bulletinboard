FROM php:7.4-apache

RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        git \
        curl \
        libpq-dev \
        libxml2-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libssl-dev \
        libmcrypt-dev \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mysqli \
        opcache \
        zip \
        soap \
        gd

RUN apt-get update \
    && apt-get install -y libonig-dev

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set recommended PHP.ini settings
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the Laravel application files
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Install dependencies
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_MEMORY_LIMIT -1
RUN composer install --no-interaction --no-plugins --prefer-dist --optimize-autoloader

# Set permissions on storage and bootstrap cache folders
RUN chmod -R 777 storage bootstrap/cache

# Set environment variables for Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
ENV APACHE_LOG_DIR /var/log/apache2

# Update the default Apache site with our document root
RUN sed -i "s|DocumentRoot /var/www/html|DocumentRoot ${APACHE_DOCUMENT_ROOT}|" /etc/apache2/sites-enabled/000-default.conf
RUN sed -i "s|/var/log/apache2|${APACHE_LOG_DIR}|" /etc/apache2/apache2.conf

# Expose port 80 for Apache
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
