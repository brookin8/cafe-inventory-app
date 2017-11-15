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
    	return $this->belongsToMany('App\Store','items_stores','item_id','store_id')->withPivot('PARs')->withTimestamps();
    }

    public function inventorycounts() {
    	return $this->belongsToMany('App\Inventorycount','items_inventorycounts','item_id','inventorycount_id')->withPivot('iventorycount_qty,inventory_dollar_amount')->withTimestamps();
    }

    public function orders() {
    	return $this->belongsToMany('App\Order','items_orders','item_id','order_id')->withPivot('order_qty','orders_dollar_amount')->withTimestamps();
    }

    public function invoices() {
    	return $this->belongsToMany('App\Invoice','items_invoices','item_id','invoice_id')->withPivot('invoice_qty','invoice_dollar_amount')->withTimestamps();
    }
}
