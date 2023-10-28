FROM debian:11

ARG DOMAIN_NAME
ARG MYSQL_HOSTNAME
ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD
ARG MYSQL_ROOT_PASSWORD

RUN apt-get update -y
RUN apt-get install vim -y
RUN apt-get install mariadb-server -y

RUN service mariadb start && commands="CREATE DATABASE IF NOT EXISTS \`${MYSQL_DATABASE}\`; \
    CREATE USER IF NOT EXISTS \`${MYSQL_USER}\`@'localhost' IDENTIFIED BY '${MYSQL_PASSWORD}'; \
    GRANT ALL PRIVILEGES ON \`${MYSQL_DATABASE}\`.* TO \`${MYSQL_USER}\`@'%' IDENTIFIED BY '${MYSQL_PASSWORD}'; \
    ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}'; \
    FLUSH PRIVILEGES;" && echo "${commands}" | /usr/bin/mysql -u root

RUN mkdir -p /var/run/mysqld
RUN chown -R mysql:mysql /var/lib/mysql /var/run/mysqld
RUN chmod 777 /var/run/mysqld

#remplacer le fichier conf mySQL
COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY conf/my.cnf /etc/mysql/my.cnf

CMD ["mysqld"]