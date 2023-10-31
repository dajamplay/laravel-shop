init: docker-down-clear docker-pull docker-build docker-up composer-install npm-install artisan-migrate artisan-store-link

docker-pull:
	docker compose pull

docker-build:
	docker compose build --pull

docker-up:
	docker-compose up -d

docker-down:
	docker compose down --remove-orphans

docker-down-clear:
	docker compose down -v --remove-orphans

artisan-migrate:
	docker exec php php artisan migrate:fresh --seed

artisan-store-link:
	docker exec php php artisan storage:link

composer-install:
	docker exec php composer install

npm-install:
	docker exec node npm install

exec-php:
	docker exec -it php sh

exec-node:
	docker exec -it node sh

db-clear:
	docker run --rm -v ${pwd}/docker/mysql:/app -w /app alpine sh -c 'rm -rf database'

seed:
	docker exec php php artisan migrate:refresh --seed
