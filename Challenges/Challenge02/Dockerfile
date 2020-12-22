FROM php:7.2-apache

WORKDIR "/var/www/html/"

COPY . /var/www/html/

RUN apt-get update && apt-get install -y iputils-ping
RUN apt-get install -y cron

# Give execution rights on the cron job
RUN echo "* * * * * root rm -rfv /var/www/html/tmp/*\n#" >> /etc/crontab
# RUN service cron restart
# RUN service cron restart
# Apply cron job
# RUN service cron start /etc/cron.d/cleaner-cron
# RUN touch /var/log/cron.log
# CMD cron && tail -f /var/log/cron.log

RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN sed -i 's/^Listen 80/ Listen 8002/g' /etc/apache2/ports.conf
RUN sed -i 's/^\#ServerName www\.example\.com/ ServerName localhost\:8002/g' /etc/apache2/sites-enabled/000-default.conf
RUN sed -i.old '1s;^;<VirtualHost *:8002>;' /etc/apache2/sites-enabled/000-default.conf
RUN chown -R www-data:www-data /var/www/html

EXPOSE 8002
RUN chmod -R 755 /var/www/html/
RUN chmod -R 733 /var/www/html/tmp/
RUN chmod -R 000 /tmp
RUN useradd -G www-data ctf_warrior
USER ctf_warrior