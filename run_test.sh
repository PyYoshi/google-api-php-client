#!/bin/bash

export MEMCACHE_HOST=127.0.0.1
export MEMCACHE_PORT=11211
cd /tmp/google-api-php-client-test
$(which php) --version
$(which php) ./vendor/bin/phpunit -v
$(which hhvm) --version
$(which hhvm) ./vendor/bin/phpunit -v
