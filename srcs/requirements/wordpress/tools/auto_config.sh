#!/bin/bash

sleep 5

# wp config create --allow-root --path=/var/www/html/wordpress \
# 		--dbname=${MYSQL_DATABASE} --dbuser=${MYSQL_USER} --dbpass=${MYSQL_PASSWORD} \
# 		--dbhost=${MYSQL_HOSTNAME}

wp core install		--allow-root \
			--path=/var/www/html/wordpress \
			--url=${WP_URL} \
			--title=${WP_TITLE} \
			--admin_user=${WP_ADMIN_USER} \
			--admin_password=${WP_ADMIN_PASSWD} \
			--admin_email=${WP_ADMIN_EMAIL} \
			--skip-email;

wp user create ${WP_USER} ${WP_EMAIL} --user_pass=${WP_PASSWD} \
	--role=author --allow-root --path=/var/www/html/wordpress



echo "wordpress ready"
exec /usr/sbin/php-fpm7.4 -F -R