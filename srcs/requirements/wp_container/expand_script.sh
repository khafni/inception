#!/bin/bash
cd /var/www/html/wordpress
sed -i "s/_ENV_DB_PASSWORD/$_ENV_DB_PASSWORD/g" wp-config.php
sed -i "s/_ENV_DB_NAME/$_ENV_DB_NAME/g" wp-config.php
sed -i "s/_ENV_DB_HOST/$_ENV_DB_HOST/g" wp-config.php
sed -i "s/_ENV_DB_USER/$_ENV_DB_USER/g" wp-config.php

#envsubst < wp-config.php > wp-config1.php
#mv wp-config1.php wp-config.php
php-fpm7.3 -F -R
