# Directions

1) clone the repo

2) install [composer](https://getcomposer.org/)

3) run composer install

4) make the tests pass


# WARNINGS

1) the tests are in vendor/bin/phpunit

2) PhpUnit is configured to use an in memory database

3) To set up a local database create a .env and drop in project root with following:

```
DB_HOST=<host-address>
DB_DATABASE=<database-name>
DB_USERNAME=<database-user>
DB_PASSWORD=<database-user-password>
```

(you must run the migrations with the artisan commands once the db is setup)
