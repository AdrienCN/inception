
COMPILATION:
	#options
		#-f specify an alternate compose file
		#-p ou --projet-name specify project name (otherwise directory name)
	#command
		#build: builds
		#create: create
		#up: create + start containers
		#start:
		#restart
		#exec: exec a command in a RUNNING container
		#images
		#stop: stop services
		#rm: remove STOPPED container
		#kill: kill
		#down : stop + remove containers, volumes, networks and images
		#ps
	docker-compose -f docker-compose.yml -p inception 
