<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Verbiage;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Verbiage::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->word),
        'user_id' => App\User::inRandomOrder()->first()->id,
        'icon' => 'fas fa-leaf',
        'body' => $faker->paragraph,
    ];
});
