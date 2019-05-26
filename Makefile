PATH := tools:$(PATH)

docker-build:
	docker build  -t free-elephants/rest-daemon-example .

composer-install:
	composer install

run-server:
	docker run -d \
    --name rest-daemon-example \
    --volume `pwd`:/srv/rest-daemon-example \
    --publish 8080:8080 \
    free-elephants/rest-daemon-example php bin/rest-daemon.php

stop-server:
	docker stop rest-daemon-example
	docker rm rest-daemon-example