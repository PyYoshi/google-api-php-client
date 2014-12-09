#!/bin/bash

MEMCACHE_HOST=127.0.0.1 MEMCACHE_PORT=11211 ./vendor/bin/phpunit --coverage-text --verbose --coverage-html coverages

open ./coverages/index.html
