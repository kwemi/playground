<?php

use Faker\Generator as Faker;

$factory->define(App\Booth::class, function (Faker $faker) {
    return [
        'universe_id' => 1,
        'name' => $faker->randomDigit()
    ];
});
