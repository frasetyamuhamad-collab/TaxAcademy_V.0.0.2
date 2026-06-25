FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    git \
    unzip \
    curl \
    zip \
    libzip-dev \
    libpng-dev \
    jpeg-dev \
    freetype-dev \
    postgresql-dev \
    oniguruma-dev \
    libxml2-dev \
    nodejs \
    npm

RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    bcmath \
    exif \
    pcntl \
    zip \
    gd

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install

RUN npm run build

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
