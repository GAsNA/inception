all: up

up:
	docker-compose -f srcs/docker-compose.yml up --build

clean: stop
	docker system prune -a

stop:
	docker-compose -f srcs/docker-compose.yml down

re: clean all

.PHONY: up clean stop re
