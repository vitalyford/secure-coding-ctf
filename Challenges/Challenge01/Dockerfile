FROM php:7.2-apache

WORKDIR "/var/www/html"

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY . /var/www/html/
RUN apt-get update && apt-get install -y iputils-ping

RUN sed -i 's/^Listen 80/ Listen 8001/g' /etc/apache2/ports.conf
RUN sed -i 's/^\#ServerName www\.example\.com/ ServerName localhost\:8001/g' /etc/apache2/sites-enabled/000-default.conf
RUN sed -i.old '1s;^;<VirtualHost *:8001>;' /etc/apache2/sites-enabled/000-default.conf
RUN chown -R www-data:www-data /var/www/html

EXPOSE 8001
RUN chmod -R 755 /var/www/html/
RUN chmod -R 000 /tmp
RUN useradd -G www-data ctf_warrior
USER ctf_warrior

