## phpat reproduction repository

This repository contains a single class with no dependencies in it:
analyzing it *should* be really simple. However, it's source root is
in the project root, which also contains `vendor/`.

Despite `vendor/` being excluded in `phpat.yml`, phpat will run out of
memory while scanning for files.

You can reproduce this by running `./run.sh` which will
* Run `composer install` using the `composer` docker image
* Run phpat using the `php:7.4` docker image

See also: https://github.com/carlosas/phpat/issues/156
