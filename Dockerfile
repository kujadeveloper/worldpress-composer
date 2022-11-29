FROM php:8.1-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev
RUN apt-get install libpng-dev -y
RUN apt-get install zlib1g-dev -y
RUN apt install libjpeg-dev -y
RUN docker-php-ext-install gd
RUN apt-get install libz-dev libzip-dev -y
RUN docker-php-ext-install zip
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-enable gd
EXPOSE 9000