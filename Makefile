install:
	composer install

validate:
	composer validate

brain-games:
	php bin/brain-games

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

