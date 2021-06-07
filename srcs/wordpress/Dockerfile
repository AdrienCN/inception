FROM debian:buster

RUN apt-get update && apt-get -y upgrade

RUN apt-get install -y \
	wget \
	php \
	php-fpm

RUN wget wget https://wordpress.org/latest.tar.gz

RUN mkdir /var/www/inception/wordpress

RUN	tar -xzf  latest.tar.gz \
	--strip-component 1 \
	-C /var/www/inception/wordpress 

RUN	rm /latest.tar.gz

#RUN mv ./wp-config.php /var/www/inception/wordpress
