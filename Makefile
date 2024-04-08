setup: install brain-games validate

install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate

