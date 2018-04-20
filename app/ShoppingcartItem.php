<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingcartItem extends Model
{
     protected $fillable = [
    	'shoppingcart_id',
    	'product_id'
    ];
    public function shoppingcart()
    {
    	return $this->belongsTo('App\Shoppingcart');
    }

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
