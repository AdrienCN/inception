FROM debian:buster

RUN apt-get update && apt-get -y upgrade

RUN apt-get install -y \
	wget \
	php \
	php-fpm

RUN wget https://wordpress.org/latest.tar.gz

RUN mkdir -p /usr/inception/wordpress

RUN	tar -xzf  latest.tar.gz \
	--strip-component 1 \
	-C /usr/inception/wordpress

RUN	rm /latest.tar.gz

ADD ./wp-config.php ./usr/inception/wordpress

EXPOSE 9000

RUN service php7.3-fpm start

CMD sleep infinity 
