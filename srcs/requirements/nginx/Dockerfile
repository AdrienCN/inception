FROM debian:buster

RUN apt-get update && apt-get install -y \
	nginx \
	dumb-init \
	openssl

COPY ./conf/nginx.conf /etc/nginx/nginx.conf
COPY ./conf/default /etc/nginx/sites-available/default

RUN mkdir /etc/nginx/ssl

RUN openssl req -newkey rsa:4096 -x509 -sha256 \
		-nodes -days 365 \
		-out /etc/nginx/ssl/inception.pem \
	   	-keyout /etc/nginx/ssl/inception.key \
   		-subj "/C=US/ST=Ilinois/L=Chicago/O=Pineapple_inc/OU=IT/CN=localhost"

EXPOSE 443

ENTRYPOINT ["/usr/bin/dumb-init"]

CMD ["nginx", "-g", "daemon off;"]
