FROM debian:buster
RUN apt-get update
RUN apt-get install nginx -y
RUN apt-get install vim -y
RUN apt-get install openssl -y
#RUN apt -y install php php-fpm 

#RUN apt -y install mariadb-server mariadb-client
#RUN echo "<?php phpinfo(); ?>" > /var/www/html/info.php
RUN openssl req -x509 -nodes -days 365 -subj "/C=CA/ST=QC/O=Company, Inc./CN=mydomain.com" -addext "subjectAltName=DNS:mydomain.com" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt;
COPY ./default /etc/nginx/sites-available/default
#run the proccess in the foregound so it won't be stopped
CMD ["nginx", "-g", "daemon off;"]
# CMD bash