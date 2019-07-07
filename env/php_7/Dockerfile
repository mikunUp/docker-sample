FROM php:7.1-apache

RUN apt-get update && \
  # PHPのExtensionをインストール．
  docker-php-ext-install pdo_mysql mysqli mbstring
RUN apt-get install -y vim
