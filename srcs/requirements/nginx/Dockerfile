FROM debian:bullseye

#installation de nginx
RUN apt-get update
RUN apt-get install -y curl \
		gnupg2 \
		ca-certificates \
		lsb-release \
		debian-archive-keyring \
		nginx \
		openssl

#installation du TSL

RUN mkdir -p /etc/nginx/ssl
# RUN mkdir -p /var/run/nginx
RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt \
    -keyout /etc/nginx/ssl/inception.key -subj\
    "/C=FR/ST=IDF/L=Paris/0=42/CN=repinat.42.fr/UID=login"

#remplacement de nginx.conf par le notre

COPY conf/nginx.conf /etc/nginx/sites-enabled/incep.conf

#lancement de nginx

EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]
