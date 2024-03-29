<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['product_name' , 'product_price' , 'stock_id' , 'inStock'];

    public function stocks(){
        return $this->belongsTo('App\Stock' , 'stock_id');
    }
}
