<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stock;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    
    return [
        'product_id' => function(){
            return Product::all()->random();
        },

        'numOfProduct' => rand(1,100),
    ];
});
