<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stock;

class Product extends Model
{
    protected $guarded=[];

    public function stock()
    {
        return $this->hasOne(Stock::class,'product_id');
    }

    
    public function  getImagePathAttribute()
    {
      return asset('products/'. $this->productImage);
    }// end of get Image Path
}
