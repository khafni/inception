FROM debian:buster
RUN apt update
#php installation
RUN apt update
RUN apt install -y php php-fpm
RUN mkdir -p /run/php/
COPY ./www.conf /etc/php/7.3/fpm/pool.d/www.conf 
RUN service php7.3-fpm start
RUN service php7.3-fpm stop
RUN apt-get install php-cgi php-common php-fpm php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath unzip wget git   gettext-base  -y
WORKDIR "/var/www/html"
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
WORKDIR "/var/www/html/wordpress"
#RUN cp wp-config-sample.php wp-config.php

COPY ./wp-config.php /var/www/html/wordpress/wp-config.php
COPY ./expand_script.sh /expand_script.sh
#RUN sed -i "s/_ENV_DB_PASSWORD/$_ENV_DB_PASSWORD/g" wp-config.php
#RUN bash /expand_script.sh
#RUN envsubst < /var/www/html/wordpress/wp-config.php > /var/www/html/wordpress/wp-config1.php
#RUN rm /var/www/html/wordpress/wp-config.php
#RUN cp /var/www/html/wordpress/wp-config1.php /var/www/html/wordpress/wp_config.php
ENTRYPOINT ["bash", "/expand_script.sh"]
#ENTRYPOINT ["php-fpm7.3", "-F", "-R"]
