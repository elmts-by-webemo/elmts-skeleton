#!/bin/bash
echo "Uruchamianie serwera PHP..."
php -S localhost:8000 -t public &

echo "Uruchamianie Gulp..."
gulp

# Po zakończeniu pracy z Gulp, zabij proces serwera PHP
trap "kill 0" EXIT