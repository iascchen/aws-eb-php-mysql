FROM php:7.2-apache

RUN apt-get update && apt-get install -y git

COPY src/ /var/www/html/

EXPOSE 80
CMD ["apache2-foreground"]
