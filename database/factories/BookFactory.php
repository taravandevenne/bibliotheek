<?php

use App\Book;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->text,
        'year' => $faker -> year,
        'ISBN' => $faker -> isbn10,
        'totalBooks'=>$faker -> numberBetween(0,10),
    ];
});
