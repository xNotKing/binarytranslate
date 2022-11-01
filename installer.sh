 #composer create-project laravel/laravel example-app
cd example-app
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan serve --host 0.0.0.0 --port 8080