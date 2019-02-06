<?php

use Faker\Generator as Faker;

$factory->define(App\Share::class, function (Faker $faker) {
    return [
        //------------------------------------------------------------------------------------
        'share_name' => $faker->share_name,
        'share_price' => $faker->share_price,
        'share_qty' => $faker->share_qty


        //------------------------------------------------------------------------------------
    ];
});
