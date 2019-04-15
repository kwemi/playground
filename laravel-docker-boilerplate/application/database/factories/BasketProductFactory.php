<?php

use Faker\Generator as Faker;

$factory->define(App\BasketProduct::class, function (Faker $faker) {
    return [
        'basket_id' => 1,
        'product_id' => $faker->numberBetween($min = 1, $max = 99)
    ];
});
