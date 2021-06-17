NAME	=	inception_adconsta

CHEMIN	=	./srcs/docker-compose.yml

all		:	up

up		:
			docker-compose -f $(CHEMIN) -p $(NAME) up -d --build 

build	:
			docker-compose -f $(CHEMIN) -p $(NAME) build

ps		:
			docker-compose -f $(CHEMIN) -p $(NAME) ps

stop	:
			docker-compose -f $(CHEMIN) -p $(NAME) stop

start	:
			docker-compose -f $(CHEMIN) -p $(NAME) start

rm		:
			docker-compose -f $(CHEMIN) -p $(NAME) rm --force

down	:
			docker-compose -f $(CHEMIN) -p $(NAME) down

re 		: 	down up
