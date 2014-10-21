#!/bin/bash

SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
PROJECT_ROOT=$SCRIPT_DIR
$PROJECT_ROOT/vendor/bin/phpcs $PROJECT_ROOT/src/ --standard=PSR2