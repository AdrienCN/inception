FROM debian:buster

RUN apt-get update && apt-get install -y \
	nginx \
	dumb-init \
	php-fpm \
	php-mysql \
	openssl

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./default /etc/nginx/sites-available/default

RUN mkdir /etc/nginx/ssl

RUN openssl req -newkey rsa:4096 -x509 -sha256 \
		-nodes -days 365 \
		-out /etc/nginx/ssl/inception.pem \
	   	-keyout /etc/nginx/ssl/inception.key \
   		-subj "/C=US/ST=Ilinois/L=Chicago/O=Pineapple_inc/OU=IT/CN=localhost"

EXPOSE 443

#RUN mkdir -p /usr/inception/wordpress


#ENTRYPOINT ["/usr/bin/dumb-init"]

#CMD ["nginx", "-g", "daemon off;"]

CMD service php7.3-fpm start && nginx -g "daemon off;"

#CMD service php7.3-fpm start &&  service nginx start && bash
