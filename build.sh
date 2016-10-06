#!/usr/bin/env bash

php composer.phar install
php vendor/bin/phalcon.php migration run