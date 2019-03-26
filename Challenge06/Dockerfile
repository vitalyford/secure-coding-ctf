FROM php:7.2-apache

WORKDIR "/var/www/html/"

COPY . /var/www/html/

RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

RUN sed -i 's/AddType application\/x-httpd-php .php/AddType application\/x-httpd-php .php .Php .pHp .phP .PHp .pHP .PhP .PHP/' /etc/apache2/apache2.conf

RUN chown -R www-data:www-data /var/www/html
