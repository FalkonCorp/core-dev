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
docker exec -it container-a /bin/bash
docker exec -it container-b /bin/bash

http://127.0.0.1:80
http://127.0.0.1:8080

https://127.0.0.1:443
https://127.0.0.1:8443
```


## Tests
