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

RUN wget				https://wordpress.org/latest.tar.gz


RUN mkdir -p			/var/www/wordpress/
RUN chmod -R 777		/var/www/wordpress/
RUN mkdir -p			/run/php/

RUN	tar -xzf			latest.tar.gz \
						--strip-component 1 \
						-C /var/www/wordpress/

RUN	rm					/latest.tar.gz

RUN	sed -i				's|listen = /run/php/php7.3-fpm.sock|listen = 9000|' \
						/etc/php/7.3/fpm/pool.d/www.conf 

ADD ./conf/wp-config.php		/var/www/wordpress/


EXPOSE 9000

ENTRYPOINT ["/usr/bin/dumb-init"]

CMD [".//usr/sbin/php-fpm7.3", "-F"]
