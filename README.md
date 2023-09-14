#Assignment project
## Installation process:
- Run `git clone https://github.com/avijitacharjee/backend-task-tp.git`
- Run `cd backend-task-tp`
- Run `cp .env.example .env`
- Modify the database name in the .env file .
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`

##### You can now access your project at localhost :)

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`

