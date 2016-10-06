#!/usr/bin/env bash

php composer.phar install
mkdir .phalcon
php vendor/bin/phalcon.php migration run