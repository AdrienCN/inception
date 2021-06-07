FROM debian:buster

RUN apt-get update && apt-get install -y \
	nginx \
	dumb-init \
	openssl

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./default /etc/nginx/sites-available/default

RUN mkdir /etc/nginx/ssl

RUN openssl req -newkey rsa:4096 -x509 -sha256 \
		-nodes -days 365 \
	   	-keyout /etc/nginx/ssl/ft_server.key -out /etc/nginx/ssl/ft_server.pem \
   		-subj "/C=US/ST=Ilinois/L=Chicago/O=Pineapple_inc/OU=IT/CN=localhost"

ENTRYPOINT ["/usr/bin/dumb-init"]

CMD ["nginx", "-g", "daemon off;"]
