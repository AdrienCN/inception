FROM debian:buster

RUN apt-get update && apt-get -y upgrade

RUN apt-get install -y \
	wget \
	php \
	php-fpm

RUN wget https://wordpress.org/latest.tar.gz

# RUN mkdir -p /usr/inception/wordpress
RUN mkdir /usr/tmp_wp

RUN	tar -xzf  latest.tar.gz \
	--strip-component 1 \
	-C /usr/tmp_wp

RUN	rm /latest.tar.gz

ADD ./wp-config.php ./usr/tmp_wp

EXPOSE 9000

CMD cp -r /usr/tmp_wp/* /usr/inception/wordpress && service php7.3-fpm start -F && bash
