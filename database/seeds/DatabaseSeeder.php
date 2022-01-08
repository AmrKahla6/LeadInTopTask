<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Stock;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(Product::class,10)->create()->each(function($product){
            return $product->stock()->save(factory(Stock::class)->make());
        });
    }
}
