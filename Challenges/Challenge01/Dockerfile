FROM php:7.2-apache

WORKDIR "/var/www/html"

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY . /var/www/html/

RUN apt-get update && apt-get install -y iputils-ping

# RUN chmod -R 444 .
# RUN useradd -M -d /src me
# USER me


# RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
# RUN sed -i 's/^Listen 80/ Listen 8001/g' /etc/apache2/ports.conf
# RUN sed -i 's/^\#ServerName www\.example\.com/ ServerName localhost\:8001/g' /etc/apache2/sites-enabled/000-default.conf
# RUN sed -i.old '1s;^;<VirtualHost *:8001>;' /etc/apache2/sites-enabled/000-default.conf
# RUN chown -R www-data:www-data /var/www/html

# EXPOSE 80
# RUN chmod -R 444 .
# RUN useradd -G www-data toto_user
# USER toto_user

