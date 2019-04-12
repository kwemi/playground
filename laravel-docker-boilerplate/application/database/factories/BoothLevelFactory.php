<?php

use Faker\Generator as Faker;

$factory->define(App\BoothLevel::class, function (Faker $faker) {
    return [
        'booth_id'=> $faker->randomDigit(),
        'name' => $faker->randomDigit(),
        'svg_map' => '<svg/>',
        'order' => $faker->randomDigit()
    ];
});
