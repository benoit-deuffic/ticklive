.DEFAULT_GOAL := compose

clean:
	docker system prune -a -f

compose:
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
