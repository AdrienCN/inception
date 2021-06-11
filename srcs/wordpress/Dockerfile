FROM debian:buster

RUN apt-get update && apt-get -y upgrade

RUN apt-get install -y \
	wget \
	dumb-init \
	php \
	php7.3-fpm \
	php7.3-common \
	php7.3-zip \
	php7.3-curl \ 
	php7.3-xml \
	php7.3-xmlrpc \
	php7.3-json \
	php7.3-mysql \
	php7.3-pdo \
	php7.3-gd \
	php7.3-imagick \
	php7.3-ldap \
	php7.3-imap \
	php7.3-mbstring \
	php7.3-intl \
	php7.3-cli \
	php7.3-recode \
	php7.3-tidy \
	php7.3-bcmath \
	php7.3-opcache

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
