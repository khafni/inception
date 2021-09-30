all: create_dirs add_host build up

create_dirs:
	mkdir -p /home/khafni/data/DB
	mkdir -p /home/khafni/data/wordPress

add_host:
	echo "127.0.1.1       khafni.42.fr" >> /etc/hosts

stop:
	docker-compose -f srcs/docker-compose.yml stop 

restart:
	docker-compose -f srcs/docker-compose.yml restart

build:
	docker-compose -f srcs/docker-compose.yml build 
up:
	docker-compose -f srcs/docker-compose.yml up -d
