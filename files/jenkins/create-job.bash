#!/bin/bash
source jenkins-auth.sh

# Money project with coverage
cat php-docker-coverage-config.xml | java -jar jenkins-cli.jar -s $JENKINS_URL -auth $AUTH create-job money-docker-coverage

# BookStack project without coverage
cat php-docker-no-coverage-config.xml | java -jar jenkins-cli.jar -s $JENKINS_URL -auth $AUTH create-job bookstack-docker-no-coverage