FROM debian:buster

RUN apt-get update && apt-get -y upgrade

RUN apt-get install -y \
	wget \
	dumb-init \
	php \
	php-fpm

RUN wget https://wordpress.org/latest.tar.gz

RUN mkdir -p /usr/tmp_wp/

RUN	tar -xzf  latest.tar.gz \
	--strip-component 1 \
	-C /usr/tmp_wp/

RUN	rm /latest.tar.gz
RUN mkdir -p /var/www/
ADD ./wp-config.php ./usr/tmp_wp
ADD ./init_wp /usr/tmp_wp/


EXPOSE 9000

ENTRYPOINT ["/usr/bin/dumb-init"]

CMD ["sh", "/usr/tmp_wp/init_wp"] 
#CMD bash
