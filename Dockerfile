FROM php:8.3.35-apache
RUN printf 'expose_php=On\nsession.upload_progress.enabled=On\n' > /usr/local/etc/php/conf.d/sample.ini
COPY index.php /var/www/html/index.php
