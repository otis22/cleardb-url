# otis22/cleardb-url

Clear-db-url parser. [Cleardb](https://www.cleardb.com/) is a db as service.
Package is useful for heroku users. 

![GitHub CI](https://github.com/otis22/cleardb-url/workflows/CI/badge.svg)
![Autofix](https://github.com/otis22/cleardb-url/workflows/AUTOFIX/badge.svg)
[![Coverage Status](https://coveralls.io/repos/github/otis22/cleardb-url/badge.svg?branch=master)](https://coveralls.io/github/otis22/cleardb-url?branch=master)

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
