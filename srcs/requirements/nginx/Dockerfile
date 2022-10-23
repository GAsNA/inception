FROM		debian:buster

MAINTAINER	Romane Leseur <rleseur@student.42.fr>

RUN			apt update -y && apt upgrade -y && apt install -y nginx openssl

COPY		conf/nginx.conf /etc/nginx/nginx.conf
#RUN			chmod 744 /etc/nginx/nginx.conf

RUN			mkdir -p /var/www/html && chmod -R 744 /var/www/html

RUN			mkdir -p /etc/nginx/ssl/private && mkdir -p /etc/nginx/ssl/certs

EXPOSE		443

RUN			openssl req -newkey rsa:2048 -sha256 -keyout /etc/nginx/ssl/private/myserver.key -out /etc/nginx/ssl/certs/server.csr -subj "/C=FR/ST=Paris/L=Paris/O=42 School/"

ENTRYPOINT	["nginx", "-g", "daemon off;"]
