#!/usr/bin/env bash
set -e
php artisan queue:work sqs --verbose --tries=3 --timeout=90 --sleep=60 --daemon
