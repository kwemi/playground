<?php

use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'configuration_id' => 1,
        'user_id' => 1
    ];
});
