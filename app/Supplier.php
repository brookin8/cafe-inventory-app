<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function items() {
    	return $this->hasMany('App\Item');
    }

    public function orders() {
    	return $this->hasMany('App\Order');
    }

    public function invoices() {
    	return $this->hasMany('App\Invoice');
    }

    public function order_methods() {
    	return $this->belongsTo('App\Order_Method');
    }

    public function stores() {
    	return $this->belongsToMany('App\Store','suppliers_stores','supplier_id','store_id')->withPivot('lead_time_days')->withTimestamps();
    }


}
