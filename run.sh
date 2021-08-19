#!/bin/bash
set -eo pipefail

docker run --rm -it --user 1000 -v $(pwd):/current -w /current composer install --ignore-platform-reqs
docker run --rm -it --user 1000 -v $(pwd):/current -w /current php:7.4 ./vendor/bin/phpat
