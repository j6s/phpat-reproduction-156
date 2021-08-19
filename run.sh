#!/bin/bash
set -eo pipefail

docker run --rm -it --user $(id -u) -v $(pwd):/current -w /current composer install --ignore-platform-reqs
docker run --rm -it --user $(id -u) -v $(pwd):/current -w /current php:7.4 ./vendor/bin/phpat
