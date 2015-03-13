# petulant-octo-wight

## Steps
1. /migrate/latest
2. /seed (**if makes sense**)


## Database Seed *(development/CLI)*
- /install/seed
  - migrate to latest version and seed the database

## Migrations *(development/CLI)*
- /install/migrate
- /install/migrate/latest
  - migrate the database to the latest version

- /install/migrate/current
  - migrate the database to the current version specified on migrations.php

- /install/migrate/:version
  - migrate the database to the specified version
  - default value is 0 if not specified

## Database Schema *(development)*
- /install/schema
  - show the database structure
  - tables and fields

- /install/schema/users
  - show the users table

### TODO:
- change error reporting on index.php
- make install scripts just accessible on development and through CLI
- implement the current_user
- implement login controller/page
- implement signup controller/page
- implement logout controller?