FROM		debian:buster

MAINTAINER	Romane Leseur <rleseur@student.42.fr>

RUN			apt update -y && apt upgrade -y &&\
			apt install -y curl mariadb-client\
			php php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common\
			php7.3-json php7.3-opcache php7.3-readline php-curl php-gd php-intl\
			php-mbstring php-soap php-xml php-xmlrpc php-zip

# https://gist.github.com/fyrebase/62262b1ff33a6aaf5a54
COPY		conf/www.conf /etc/php/7.3/fpm/pool.d/

RUN			mkdir -p /var/run && mkdir -p /run/php && mkdir -p /var/www/html

COPY		conf/wp-config.php /etc/
COPY		conf/script.sh	/etc/script.sh

RUN			chmod -R 755 /var/www/html/

EXPOSE		9000

# https://make.wordpress.org/cli/handbook/guides/installing/
RUN			curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar &&\
			php wp-cli.phar --info &&\
			chmod +x wp-cli.phar &&\
			mv wp-cli.phar /usr/local/bin/wp

CMD			["sh", "etc/script.sh"]
