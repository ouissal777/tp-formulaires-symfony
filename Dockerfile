FROM php:8.2-cli-alpine

# Installer seulement l'essentiel
RUN apk add --no-cache git unzip curl

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

# Installer les extensions PHP nécessaires (méthode alternative)
RUN docker-php-ext-install pdo pdo_sqlite
