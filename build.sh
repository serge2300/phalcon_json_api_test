#!/usr/bin/env bash

php composer.phar install
./vendor/bin/phalcon.php migration run