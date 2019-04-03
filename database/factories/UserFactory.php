<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Faker\Provider\nl_BE\Person;

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
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'rrn' => Person::rrn(),
        'password' => $faker -> password,
        'remember_token' => Str::random(10),
    ];
});
