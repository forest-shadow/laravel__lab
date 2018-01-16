<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('Product ###'),
        'short_desc' => $faker->realText(100),
        'desc' => $faker->realText(300),
        'price' => $faker->randomFloat(13, 0, 1000000),
    ];
});
