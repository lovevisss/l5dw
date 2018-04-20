<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    protected $fillable = ['items'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function shoppingcartItems()
    {
    	return $this->hasMany('App\ShoppingcartItem');
    }
}
