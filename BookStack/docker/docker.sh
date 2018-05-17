#!/bin/sh
set +e

if [ -n "$DB_HOST" -a -n "$DB_PORT" ]
then
    until nc -z -v -w30 $DB_HOST $DB_PORT
    do
        echo "Waiting for database connection..."
        # Wait for 5 seconds before check again
        sleep 5
    done
fi

phing $BUIL_TARGET $PHING_VERBOSE
code=$?

# Fix file path in xml log files
find $WORK_DIR/build -type f -name "*.xml" -print0 | xargs -0 -n1 sed -i "s|\"$WORK_DIR|\"$JENKINS_HOME/|g"
find $WORK_DIR/build -type f -name "*.htm*" -print0 | xargs -0 -n1 sed -i "s|$WORK_DIR||g"

exit $code
