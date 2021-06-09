FROM debian:buster

RUN apt-get update && apt-get install -y \
	mariadb-server \
	mariadb-client 

EXPOSE 3306

RUN echo "CREATE DATABASE $WP_DB_NAME;"
RUN echo "CREATE DATABASE $WP_DB_NAME;" | mysql -u root
RUN echo "GRANT ALL ON $WP_DB_NAME.* TO '$WP_DB_USER'@'$WP_DB_HOST' IDENTIFIED BY '$WP_DB_PASSWORD' WITH GRANT OPTION;" | mysql -u root
RUN echo "FLUSH PRIVILEGES;" | mysql -u root

CMD bash
