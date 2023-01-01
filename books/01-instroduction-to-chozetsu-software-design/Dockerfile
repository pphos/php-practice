FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
  vim \
  git \
  unzip

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer