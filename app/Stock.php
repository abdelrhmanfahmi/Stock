<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stocks";
    protected $fillable = ['stock_name'];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
