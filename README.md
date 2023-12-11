Install Dependencies:
composer install

-----------
Set Up Environment:

Duplicate the .env.example file and rename it to .env.
Configure your database connection in the .env file.
Generate the application key:

php artisan key:generate
Run Migrations and Seed Data:


php artisan migrate --seed
Install Laravel Voyager:

php artisan voyager:install
Run the Development Server:


php artisan serve
The application will be accessible at http://localhost:8000.

Access Voyager Admin Panel:
Visit http://localhost:8000/admin and log in using the default credentials (admin@admin.com / password).