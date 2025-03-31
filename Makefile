DOCKER = docker
DOCKER_COMPOSE = docker compose

start:
	$(DOCKER_COMPOSE) up -d
.PHONY: start

stop:
	$(DOCKER_COMPOSE) down
.PHONY: stop

restart:
	make stop && make start
.PHONY: restart

build:
	$(DOCKER_COMPOSE) build --no-cache
.PHONY: build

logs:
	$(DOCKER_COMPOSE) logs -f
.PHONY: logs