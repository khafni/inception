FROM debian:buster
RUN apt update 
RUN apt-get -y upgrade
RUN apt -y install mariadb-server mariadb-client
COPY ./wdpress.sql /wdpress.sql
COPY ./50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
RUN service mysql start
# RUN mariadb wpdb < /wdpress.sql
CMD ["mysqld"]
# CMD ["bash"]