#!/bin/bash

while [[ "1" == "1" ]]
do
    clear;
    docker compose exec php composer dox
    sleep 5;
done;
