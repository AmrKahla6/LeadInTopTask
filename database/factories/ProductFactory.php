<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $date   = rand(1262055681,1262055681);
    return [
        'productName'   => $faker->name,
        'productCode'   => rand(100,10000) . rand(1000,8000000),
        'productImage'  => rand(1,10).'.png',
        'created_at'    => date("Y-m-d H:i:s",$date),
        'updated_at'    => date("Y-m-d H:i:s",$date),
    ];
});
