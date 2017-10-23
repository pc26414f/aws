#!/bin/bash

if [ -d /var/www/html ]; then
	rm -rf /var/www/html
fi

mkdir -p /var/www/html
