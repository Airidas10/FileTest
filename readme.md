## Test file deletes with Artisan:

Setup steps:

Clone this project and cd into it.

Run `composer install`.

Run `php vendor/bin/homestead make`.

Run `vagrant up`.

Run `cp .env.example .env`

Do `vagrant ssh` and run `php artisan migrate:fresh`.

Then the commands are:

`php artisan files:softDelete` and `php artisan files:hardDelete`
