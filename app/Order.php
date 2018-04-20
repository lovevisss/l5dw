<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    	'user_id',
        'status'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function orderItems()
    {
    	return $this->hasMany('App\OrderItem');
    }

    public function getStatusTextAttribute()
    {
        $text = ['未支付','已支付','已发货','退货中','已完成'];
        return $text[$this->status];
    }
}
