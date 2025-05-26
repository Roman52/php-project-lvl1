install:
	composer install

validate:
	composer validate

brain-games:
	php bin/brain-games

brain-even:
	php bin/brain-even

brain-calc:
	php bin/brain-calc

brain-gcd:
	php bin/brain-gcd

lint:
	composer run-script phpcs -- --standard=PSR12 src bin
