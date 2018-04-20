<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'title', 'description', 'price', 'availability', 'image'];

    public static $rules = [
    	'category_id' => 'required|integer',
    	'title' => 'required|min:2',
    	'description' => 'required',
    	'price' => 'required|numeric',
    	'availability' => 'integer',
    	'image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif'
    ];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function getPriceAttribute()  //特价设置
    {
        if($this->availability ==1)
            return 1;
        else
            return $this->attributes['price'];
    }
}
