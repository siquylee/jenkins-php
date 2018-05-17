#!/bin/sh
set +e
export COMPOSE_PROJECT_NAME=BookStack
export DOCKER_HOST="tcp://0.0.0.0:2376"
export JENKINS_HOME=$(dirname `pwd`)
SCRIPT_DIR="docker"

docker-compose up -d --force-recreate && docker-compose exec -T app /bin/sh $SCRIPT_DIR/docker.sh
code=$?
docker-compose down
exit $code