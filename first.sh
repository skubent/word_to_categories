#!/bin/bash

composer install
./vendor/phpunit/phpunit/phpunit --filter="testFirstExample"
