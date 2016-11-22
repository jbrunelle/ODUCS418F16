#!/bin/bash

echo "jfb test 1"

RET=1
while [[ RET -ne 0 ]]; do
    echo "=> Waiting for MySQL to start"
    sleep 5
    mysql -uroot -e "status" > /dev/null 2>&1
RET=$?
done

echo "=> MySQL Started"

echo "=> Importing SQL file"
mysql -uroot --force --verbose < /app/milestone2dump.sql

echo "=> All done"

