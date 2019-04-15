<?php

use Faker\Generator as Faker;

$factory->define(App\Basket::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'product_id' => $faker->randomElement($array = array('basket 1','basket 2', 'basket 3'), $count = 1)
    ];
});
