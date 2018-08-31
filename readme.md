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

## test command will be available like this:
`composer test`

## Laravel API Documentation Generator
Automatically generate your API documentation from your existing Laravel routes

Go to your config/app.php and add the service provider:

`Mpociot\ApiDoc\ApiDocGeneratorServiceProvider::class,`

To generate your API documentation, use the api:generate artisan command.

`$ php artisan api:generate --routePrefix="api/*"`



## Laravel Best Practices

=>	Only store custom applicaton code in git.

=>	all dependencies only need to be referenced in the composer.json file.

=>	Use generators instead of creating code manually.

=>	All controller classes must have a corresponding unit test class

=>	Create a new migration for each database change.

=>	Never trust or directly use user input.

=>	never manually generate SQL queries by concatenating hard-coded SQL with user input. 

=>	Create base classes for all model, controller, view classes.

=>	Always include external libraries via composer. 

=>	Never change code in an external library.

=>	Business logic should be in service class.

=>	Reuse code when you can. SRP is helping you to avoid duplication.

=>	Prefer to use Eloquent over using Query Builder and raw SQL queries.

=>	Comment your code, but prefer descriptive method and variable names over comments.

=>	Do not put JS and CSS in Blade templates and do not put any HTML in PHP classes.

=>	Use config and language files, constants instead of text in the code.

=>	Use standard Laravel tools accepted by community.

=>	Follow Laravel naming conventions.

=>	Use shorter and more readable syntax where possible.

=>	Store dates in the standard format. Use accessors and mutators to modify date format.

=>	Never put any logic in routes files.

=> create an "authentication" session to protect the specific routes and give access just to an authorized person.