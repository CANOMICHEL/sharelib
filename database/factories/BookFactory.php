<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'author_id'=>rand(1,100),
        'user_id'=>rand(1,100),
        'tittle'=>$faker->sentence($nbWords=2,$variableNbWords=true),
        'year'=>$faker->numberBetween($min = 1500, $max = 2020),
    ];
});
