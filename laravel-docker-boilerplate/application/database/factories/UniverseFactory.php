<?php

use Faker\Generator as Faker;

$factory->define(App\Universe::class, function (Faker $faker) {
    return [
        'floor_id' => 2,
        'name' => $faker->colorName(),
        'color_code' => $faker->hexcolor()
    ];
});
