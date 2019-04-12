<?php

use Faker\Generator as Faker;

$factory->define(App\Configuration::class, function (Faker $faker) {
    return [
        'booth_level_id' => 1,
        'name' => $faker->randomElement($array = array('conf 1','conf 2', 'conf 3'), $count = 1),
        'configuration' => '{"placements_id":1, "products_id":1}'
    ];
});
