FROM php:8.2-apache

# Instala extensões necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Ativa o mod_rewrite
RUN a2enmod rewrite

# Copia config customizada do Apache
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Define diretório padrão como /var/www/html
WORKDIR /var/www/html
