<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function store() {
    	return $this->belongsTo('App\Store');
    }

    // public function orders() {
    // 	return $this->belongsTo('App\Order');
    // }

    public function items() {
    	return $this->belongsToMany('App\Item', 'items_invoices','invoice_id','item_id')->withPivot('invoice_qty','invoice_dollar_amount')->withTimestamps();
    }

    public function order() {
    	return $this->belongsTo('App\Order');
    }

    public function user() {
    	return $this->belongsTo('App\User','created_by','id');
    }

    public function supplier() {
    	return $this->belongsTo('App\Supplier');
    }
}
