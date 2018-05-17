#!/bin/bash
source jenkins-auth.sh

wget -N $JENKINS_URL/jnlpJars/jenkins-cli.jar
java -jar jenkins-cli.jar -s $JENKINS_URL -auth $AUTH install-plugin checkstyle cloverphp crap4j dry htmlpublisher jdepend plot pmd violations warnings xunit
java -jar jenkins-cli.jar -s $JENKINS_URL -auth $AUTH safe-restart