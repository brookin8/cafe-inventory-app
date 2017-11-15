<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function categories() {
    	return $this->belongsTo('App\Category');
    }

    public function uoms() {
    	return $this->belongsTo('App\Uom');
    }

    public function suppliers() {
    	return $this->belongsTo('App\Supplier');
    }

    public function stores() {
    	return $this->belongsToMany('App\Store','items_stores');
    }

    public function inventorycounts() {
    	return $this->belongsToMany('App\Inventorycount','items_inventorycounts');
    }

    public function orders() {
    	return $this->belongsToMany('App\Order','items_orders');
    }

    public function invoices() {
    	return $this->belongsToMany('App\Invoice','items_invoices');
    }
}
