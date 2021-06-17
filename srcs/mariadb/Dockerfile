FROM debian:buster

RUN apt-get update && apt-get install -y \
	dumb-init \
	mariadb-server \
	mariadb-client 

EXPOSE 3306

RUN	sed -i	's/\#port/port/' /etc/mysql/mariadb.conf.d/50-server.cnf

RUN sed -i	's/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

ENTRYPOINT ["/usr/bin/dumb-init"]

CMD [".//usr/bin/mysqld_safe"]
