#!/bin/bash
EC2_INSTANCE_ID=$(curl -s http://169.254.169.254/latest/meta-data/instance-id)
EC2_AZ=$(curl -s http://169.254.169.254/latest/meta-data/placement/availability-zone)
sed -i "s/Delivery/Delivery on $EC2_INSTANCE_ID in $EC2_AZ/g" /var/www/html/index.html
chmod 664 /var/www/html/index.html

# Set permissions to storage and bootstrap cache
sudo chmod -R 0777 /var/www/html/storage
sudo chmod -R 0777 /var/www/html/bootstrap/cache
#
cd /var/www/html
#
# Run composer
sudo /usr/bin/composer.phar install --no-ansi --no-dev --no-suggest --no-interaction --no-progress --prefer-dist --no-scripts -d /var/www/html
#
# Run artisan commands
php /var/www/html/artisan migrate