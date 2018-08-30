## Example Laravel API

 This is a sample project to show how you could write an API using Laravel 5.

 There will be some minor differences, specially regarding downloaded packages, as I used the
 excellent [Laravel Ide Helper] to setup
 PhpStorm bindings and other features.

## Running the API

It's very simple to get the API up and running. First, create the database (and database
user if necessary) and add them to the `.env` file.

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate, seed, all that jazz:

1. `composer install`
2. `php artisan migrate`
3. `php artisan db:seed`
4. `php artisan serve`

The API will be running on `localhost:8000`.

Now Generate swagger for the apis

1. `php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"`
2. `php artisan serve`

The Swagger will be running on `localhost:8000/api/documentation`.

To Run on particular port 

`php artisan serve --port=5011`

The API will be running on `localhost:5011`.

To Run server in forever

`nohup php artisan serve --port=5011 &`

To Kill 

```
ps -ef | grep "$PWD/server.php"
kill 23978
```

For Article API Calls you need one authorization token which you will get from login or register you need to pass it in header `Authorization=Bearer <TOKEN>`.