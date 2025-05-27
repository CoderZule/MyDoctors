# Run migrations and seed the database
php artisan migrate --force
php artisan db:seed --force

# Start Laravel development server
php artisan serve --host=0.0.0.0 --port=8080
