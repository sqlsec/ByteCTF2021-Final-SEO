FROM php:7.2-apache

COPY start.sh /
COPY www /var/www/html/
RUN chown -R root:root /var/www/html/ && \
    chmod -R 755 /var/www/html && \
    chmod +x /start.sh
CMD /start.sh