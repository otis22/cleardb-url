# otis22/cleardb-url

Clear-db-url parser. [Cleardb](https://www.cleardb.com/) is a db as service.
Package is useful for heroku users. 

![GitHub CI](https://github.com/otis22/cleardb-url/workflows/CI/badge.svg)
![Autofix](https://github.com/otis22/cleardb-url/workflows/AUTOFIX/badge.svg)
[![Coverage Status](https://coveralls.io/repos/github/otis22/cleardb-url/badge.svg?branch=master)](https://coveralls.io/github/otis22/cleardb-url?branch=master)

### How to use 

Install package

```shell
composer require otis22/cleardb-url
```

## For heroku users

Heroku server put clearDb url to environments. This function use CLEARDB_DATABASE_URL. 

```php

use function Otis22\ClearDb\credential;

$credential = credential();

$credential->db(); #db name
$credential->driver(); #db type(mysql, pgsql, ...)
$credential->host(); #host
$credential->pass(); #password
$credential->user(); #user   
```

### If you using phinx on heroku

```php
use function Otis22\ClearDb\phinx;

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'production',
        'production' => phinx()->asArray()
    ],
...
```

### If you want parse custom clearDb url

```php

use Otis22\ClearDb\ParsedUrl;
use Otis22\ClearDb\Credential;

$credential = new Credential(
    new ParsedUrl('mysql://user:pass@host/dbname?reconnect=true')
);
# Available for getting db credentials
$credential->db();
...
```

## Contributing

For run all tests
```shell
make all
```
or connect to terminal
```shell
make exec
```

or use built in php server [http://localhost:8080](http://localhost:8080)
```shell
# start server on 8080 port
make serve 
# custom port 8081
make serve PORT=8081
```

*Dafault php version is 7.4*. Use PHP_VERSION= for using custom version. 
```shell
make all PHP_VERSION=8.0
# run both 
make all PHP_VERSION=7.4 && make all PHP_VERSION=8.0
```

all commands
```shell
# composer install
make install
# composer install with --no-dev
make install-no-dev
# check code style
make style
# fix code style
make style-fix
# run static analyze tools
make static-analyze
# run unit tests
make unit
#  check coverage
make coverage
```
