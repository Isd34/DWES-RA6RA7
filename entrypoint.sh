#!/bin/bash
chown -R www-data:www-data /var/www/html
find /var/www/html -type d -exec chmod 755 {} \;
find /var/www/html -type f -exec chmod 644 {} \;
chmod -R 775 /var/www/html/*/storage /var/www/html/*/bootstrap/cache 2>/dev/null || true

apache2-foreground
