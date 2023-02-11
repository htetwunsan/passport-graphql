start:
	docker compose up --build

exec:
	docker compose exec -it app sh

down:
	docker compose down