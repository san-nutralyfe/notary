1.  run -> composer install
2.  run -> php -r "file_exists('.env') || copy('.env.example', 'Frontend/.env');"
3.  run -> php -r "file_exists('.env') || copy('.env.example', 'Admin/.env');"
4.  run -> php artisan key:generate
5.  run -> php admartisan key:generate


