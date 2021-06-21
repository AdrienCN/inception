CHEMIN	=	./srcs/docker-compose.yml

all		:	up

up		:
			docker-compose -f $(CHEMIN)  up -d --build 

build	:
			docker-compose -f $(CHEMIN)  build

ps		:
			docker-compose -f $(CHEMIN)  ps

stop	:
			docker-compose -f $(CHEMIN)  stop

start	:
			docker-compose -f $(CHEMIN)  start

rm		:
			docker-compose -f $(CHEMIN)  rm --force

down	:
			docker-compose -f $(CHEMIN)  down

clean	: 	down

fclean	:	clean

re 		: 	down up
