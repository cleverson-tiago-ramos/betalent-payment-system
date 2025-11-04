FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev

# Limpar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensões do PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Criar usuário para a aplicação
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copiar código da aplicação
COPY . /var/www/html

# Definir proprietário dos arquivos
RUN chown -R www:www /var/www/html

# Mudar para o usuário www
USER www

# Definir diretório de trabalho
WORKDIR /var/www/html

# Expor porta 9000 (PHP-FPM)
EXPOSE 9000

CMD ["php-fpm"]
