<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at', 'expected_delivery_date'];

    public function items() {
    	return $this->belongsToMany('App\Item', 'items_orders','order_id','item_id')->withPivot('order_qty','orders_dollar_amount')->withTimestamps();
    }

    // public function invoices() {
    // 	return $this->hasOne('App\Invoice');
    // }
}
