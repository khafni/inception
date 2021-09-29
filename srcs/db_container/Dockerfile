FROM debian:buster
RUN apt update 
RUN apt-get -y upgrade
RUN apt -y install mariadb-server mariadb-client
COPY ./wpdb_create.sql /wdpress.sql
COPY ./50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
#COPY ./wpdb_create.sql /wpdb_create.sql
#RUN service mysql start && 
RUN service mysql start && sleep 2 && mysql --user=root --password=h < /wdpress.sql
#RUN service mysql start &&  mysqld --init-file='/wpdb_create.sql'
CMD ["mysqld"]
