FROM debian:buster

RUN apt-get update && apt-get install -y \
	dumb-init \
	mariadb-server \
	mariadb-client 

EXPOSE 3306

#RUN echo "CREATE DATABASE $WP_DB_NAME;"
#RUN echo "CREATE DATABASE $WP_DB_NAME;" | mysql -u root
#RUN echo "GRANT ALL ON $WP_DB_NAME.* TO '$WP_DB_USER'@'$WP_DB_HOST' IDENTIFIED BY '$WP_DB_PASSWORD' WITH GRANT OPTION;" | mysql -u root
#RUN echo "FLUSH PRIVILEGES;" | mysql -u root

#CMD echo "$WP_DB_NAME" && echo "$WP_DB_PASSWORD" && bash

RUN mkdir -p			/usr/mdb_tmp/
ADD ./script/init_mdb	/usr/mdb_tmp/

#RUN	sed -i '			s|datadir=/var/lib/mysql|datadir=/var/www/mariadb|' /etc/mysql/mariadb.conf.d/50-server.cnf

RUN	sed -i				's/\#port/port/' /etc/mysql/mariadb.conf.d/50-server.cnf

RUN sed -i				's/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

#RUN chmod +x ./mariadb/script
#ENTRYPOINT ["/usr/bin/dumb-init"]
CMD [".//usr/mdb_tmp/init_mdb"]
#CMD	tail -f /dev/null 
