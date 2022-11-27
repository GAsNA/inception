FROM		debian:buster

MAINTAINER	Romane Leseur <rleseur@student.42.fr>

RUN			apt update -y && apt upgrade -y &&\
			apt install -y mariadb-server mariadb-client

RUN			mkdir -p /run/mysqld && chown mysql:root /run/mysqld

COPY		conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY		conf/script.sh	/etc/script.sh

EXPOSE		3306

CMD			["sh", "etc/script.sh"]
