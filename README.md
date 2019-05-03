Time Machine
-
This Laravel Nova tool provides versioning for your resources, so you can go back or forward in time. It adds a version restore button on your resource detail view so you can switch between them at all time. (pun intented)

## Installation

You can install Time Machine into a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require emeto/timemachine
```

Publish the migrations used by Time Machine into your Laravel app and run the migrations:

```bash
php artisan vendor:publish --tag=nova-timemachine
php artisan migrate
```

## Usage
In order to enable Time Machine on your resources, you need to use the `TimeTrackable` trait on each Eloquent model you want Time Machine to be enabled.
```php
use Emeto\Timemachine\Traits\TimeTrackable;

class EloquentModel
{
    use TimeTrackable;
}    
```
Subsequently, every time this model is created or updated, Time Machine will save it's current state to a `saved_states` table. Once the model is deleted from the database, every versions will also be deleted.
