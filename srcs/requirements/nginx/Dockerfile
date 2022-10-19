FROM		debian:buster

MAINTAINER	Romane Leseur <rleseur@student.42.fr>

RUN			apt update && apt upgrade && apt install -y nginx openssl

COPY		nginx.conf /etc/nginx/nginx.conf
RUN			chmod 744 /etc/nginx/nginx.conf

# run openssl

ENTRYPOINT	["nginx" ]
