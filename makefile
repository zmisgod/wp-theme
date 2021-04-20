.PHONY: run

all: run

run:
	docker-compose -f deploy.yml up