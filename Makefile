.DEFAULT_GOAL := build

clean:
	docker system prune -a -f

build:
	docker-compose up --build -d

up:
	docker-compose up -d

down:
	docker-compose down

start:
	docker-compose start

stop:
	docker-compose stop

rebuild: stop down clean compose
