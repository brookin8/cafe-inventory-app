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

    public function supplier() {
    	return $this->belongsTo('App\Supplier');
    }

    public function store() {
    	return $this->belongsTo('App\Store');
    }

    public function user() {
    	return $this->belongsTo('App\User','created_by','id');
    }

    // public function invoices() {
    // 	return $this->hasOne('App\Invoice');
    // }
}
