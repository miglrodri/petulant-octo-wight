# petulant-octo-wight

## DATABASE SEEDING
- /install/seed
  - migrate to latest version and seed the database

## MIGRATIONS
/install/migrate
/install/migrate/latest
- migrate the database to the latest version

/install/migrate/current
- migrate the database to the current version specified on migrations.php

/install/migrate/:version
- migrate the database to the specified version
- default value is 0 if not specified

## DATABASE SCHEMA
/install/schema
- show the database structure
- tables and fields

/install/schema/users (development)
- show the users table