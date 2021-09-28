FROM debian:buster
RUN apt update
#php installation
RUN apt update
RUN apt install -y php php-fpm
RUN mkdir -p /run/php/
COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf 
RUN service php7.3-fpm start
RUN service php7.3-fpm stop
RUN apt-get install php-cgi php-common php-fpm php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath unzip wget git -y
WORKDIR "/var/www/html"
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
WORKDIR "/var/www/html/wordpress"
COPY ./wp-config.php /var/www/html/wordpress/wp-config.php
ENTRYPOINT ["php-fpm7.3", "-F", "-R"]
