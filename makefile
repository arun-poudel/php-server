tag = 0.1
include .env

build:
	@printf "\033[0;32m>>> Starting local services\033[0m\n"
	docker-compose build

services:
	@printf "\033[0;32m>>> Starting local services\033[0m\n"
	docker-compose -p ${WORKSPACE} up -d

services.stop:
	@printf "\033[0;32m>>> Stopping local services\033[0m\n"
	docker-compose -p ${WORKSPACE} down --remove-orphans --rmi local
