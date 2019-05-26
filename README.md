# Rest Daemon Server Instance Example

Simplest rest server implementation powered by [Rest Daemon](https://github.com/FreeElephants/rest-daemon). 
Show self uptime and total number of handled requests. 

Application hosted at [http://rest-daemon-example.samizdam.net:8080](http://rest-daemon-example.samizdam.net:8080)

## Install
```
git clone git@github.com:FreeElephants/rest-daemon-example.git
cd rest-daemon-example
make docker-build
make composer-install
```

App is dockerized. If you don't have docker, you can use local installed composer and php without make.

## Run
```
make run-server
```
