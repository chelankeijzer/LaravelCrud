<?php

use Faker\Generator as Faker;

$factory->define(App\Share::class, function (Faker $faker) {
    return [
        //------------------------------------------------------------------------------------
        'share_name' => $faker->realText(rand(5, 20)),
        'share_price' => $faker->rand(100,9999),
        'share_qty' => $faker->rand(1,99999),,


        //------------------------------------------------------------------------------------
    ];
});
