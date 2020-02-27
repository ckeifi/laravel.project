<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word($nb = 3),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'votes' => $faker->randomDigit(),
        
    ];
});
