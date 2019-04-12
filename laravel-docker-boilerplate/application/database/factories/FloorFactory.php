<?php

use Faker\Generator as Faker;

$factory->define(App\Floor::class, function (Faker $faker) {
    return [
        'store_id'=> $faker->randomDigit(),
        'name' => $faker->randomDigit(),
        'svg_map' => '<svg/>',
        'order' => $faker->randomDigit()
    ];
});
