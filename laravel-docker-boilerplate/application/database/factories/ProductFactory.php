<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'hier_lvl_2' => $faker->randomElement($array = array('JEWELLERY TOTAL','WATCHES'), $count = 1),
        'hier_lvl_3' => $faker->randomElement($array = array('BIJOUX','NEW JEWELLERY', 'FINE AND HIGH JEWELLERY WATCHES', 'GOLD / STEEL WATCHES', 'GOLD WATCHES', 'JEWELLERY WATCHES', 'STEEL WATCHES'), $count = 1),
        'hier_lvl_4' => $faker->randomElement($array = array('BIJOUX','NEW JEWELLERY', 'FINE AND HIGH JEWELLERY WATCHES', 'GOLD / STEEL WATCHES', 'GOLD WATCHES', 'JEWELLERY WATCHES', 'STEEL WATCHES'), $count = 1),
        'hier_lvl_5' => $faker->randomElement($array = array('CENTER STONES OFFER BJ','CLASSIC OFFER BJ', 'FAUNA & FLORA BJ', 'ICONIC BJ'), $count = 1),
        'article_model' => 'CRB4098200',
        'designation' => $faker->text($maxNbChars = 50),
        'image_url' => $faker->imageUrl($width = 640, $height = 480),
        'category' => $faker->randomElement($array = array('Bracelets','Earrings', 'Necklaces'), $count = 1)
    ];
});
