## Features

- Use git for version control.
- Use Lumen micro-framework by Laravel.
- Use of the repository pattern for resolve the concept of polymorphism.
- use php unitTest for ApiController.

## Quick Start

- Clone this repo or download it's release archive and extract it somewhere
- Run `composer install`
- Configure your `.env` file for APP_KEY.

## A Live PoC

- Run a PHP built in server from your root project:

```sh
php -S localhost:8000 -t public/
```

- To list all registered api routes inside your application, you must execute `php artisan route:list`

```
⇒  php artisan route:list
+------+----------------------------------------------+----------------------+-------------------------------------------+----------------------+------------+
| Verb | Path                                         | NamedRoute           | Controller                                | Action               | Middleware |
+------+----------------------------------------------+----------------------+-------------------------------------------+----------------------+------------+
| GET  | /                                            |                      | None                                      | Closure              |            |
| GET  | /api/v1/pizza/order/{type}                   | api.pizza.order      | App\Http\Controllers\PizzaStoreController | orderPizza           |            |
| GET  | /api/v1/duck/fly                             | api.duck.fly         | App\Http\Controllers\DuckController       | fly                  |            |
| GET  | /api/v1/duck/quack                           | api.duck.quack       | App\Http\Controllers\DuckController       | quack                |            |
| GET  | /api/v1/statistics/print/{candidate}/{count} | api.statistics.print | App\Http\Controllers\StatisticsController | printGuessStatistics |            |
+------+----------------------------------------------+----------------------+-------------------------------------------+----------------------+------------+

```

## Run unit Tests
 Run the followin command in CLI :
```
~/workspace/polymorphismExample $ vendor/bin/phpunit
```
 OR 
 ```
~/workspace/polymorphismExample $ phpunit
```