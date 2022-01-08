<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Stock extends Model
{
    protected $guarded=[];

    public $timestamps = false;
    
    public function product()
    {
        return $this->hasOne(Product::class,'product_id');
    }
}
