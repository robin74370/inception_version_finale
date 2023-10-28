FROM debian:bullseye

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install vim -y
RUN apt-get install -y \
	curl \
	php-fpm \
	php-mysql \
	php-curl \
	php-gd \
	php-intl \
	php-mbstring \
	php-soap \
	php-xml \
	php-xmlrpc \
	php-zip

RUN chmod -x /etc/php/7.4/fpm/pool.d

COPY /conf/www.conf /etc/php/7.4/fpm/pool.d/

RUN mkdir -p /run/php

# Download CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN mkdir -p /var/www/html/wordpress
RUN wp core download --allow-root --path=/var/www/html/wordpress --force

RUN chmod -R 755 /var/www/html/wordpress
RUN chown -R www-data.www-data /var/www/html/wordpress

COPY conf/wp-config.php /var/www/html/wordpress

COPY tools/auto_config.sh /auto_config.sh

RUN chmod +x /auto_config.sh
ENTRYPOINT ["/auto_config.sh"]