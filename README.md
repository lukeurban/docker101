# Docker101
This repository has four branches. Each containes different docker configuration: 
* v1 - simple one container (nginx) configuration
* v2 - standard (nginx - php - mysql) comfiguration
* v3 - extended v2 with backend scaling with simple nginx load balancer.
* v4 - docker networs. Two applications bined by one gateway.



# v3
To scale backend container, run command:

    docker-compose up -d --scale backend=3 --build
