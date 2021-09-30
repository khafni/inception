all: build up create_dirs

create_dirs:
	mkdir -p /home/khafni/data/DB
	mkdir -p /home/khafni/data/wordPress

stop:
	docker-compose -f srcs/docker-compose.yml stop 

restart:
	docker-compose -f srcs/docker-compose.yml restart

build:
	docker-compose -f srcs/docker-compose.yml build -d
up:
	docker-compose -f srcs/docker-compose.yml up -d
