## How to run

You’ll need to set up a MySQL DB and link it in the .env file, you'll also need to create/add your own Pusher details to the .env file.
Once the DB is set up it can be automatically seeded.

Seed your DB:

$ php artisan db:seed

Migrate the DB:

$ php artisan migrate 

Run the app:

$ php artisan serve
