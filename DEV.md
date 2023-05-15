# DEV


## Build, Run, Build and Run
```shell
docker compose build
docker compose build --progress=plain
docker compose up -d
docker compose up -d --build
```


## Access
```shell
docker compose exec -it php /bin/sh

http://127.0.0.1:80
http://127.0.0.1:8080

https://127.0.0.1:443
https://127.0.0.1:8443
```


## Tests
```shell
docker compose exec php composer test
docker compose exec php composer dox
docker compose exec php composer cover
```
