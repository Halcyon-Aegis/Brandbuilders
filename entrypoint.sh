#!/bin/sh
php artisan key:generate --force
# Wait for database to be ready
until mysqladmin ping -h bb_mysql_db -u"$DB_USERNAME" -p"$DB_PASSWORD" &>/dev/null; do
    echo "Waiting for database to be ready..."
    sleep 5
done

php artisan migrate --force
php artisan serve --host=0.0.0.0 --port=8000 &
wait
