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

composer_install:
	docker-compose exec php composer install

composer_update:
	docker-compose exec php composer update

doctrine_schema_create:
	docker-compose exec php ./bin/console doctrine:schema:create

doctrine_database_drop:
	docker-compose exec php ./bin/console doctrine:database:drop --force

doctrine_database_create:
	docker-compose exec php ./bin/console doctrine:database:create

postgre_import:
	docker-compose exec db  sh -c 'psql -h db -U project project < /data/pgdump.sql'

install: build composer_install composer_update postgre_import

re-install: stop down clean compose install
