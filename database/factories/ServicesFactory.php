<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('Service ###'),
        'short_desc' => $faker->realText(100),
        'desc' => $faker->realText(300),
    ];
});
