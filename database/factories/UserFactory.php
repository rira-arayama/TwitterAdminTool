<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'account_id' => random_int(10000000, 9999999999999),
        'name' => $faker->name,
        'avatar_path' => $faker->url,
        'access_token' => Str::random(40),
        'access_token_secret' => Str::random(50)
    ];
});
