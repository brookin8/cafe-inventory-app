<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function inventorycounts() {
    	return $this->hasMany('App\Inventorycount')
    }

    public function Invoices() {
    	return $this->hasMany('App\Invoices')
    }

    public function items() {
    	return $this->belongsToMany('App\Item', 'items_stores','store_id','item_id')->withPivot('PARs')->withTimestamps();
    }

     public function suppliers() {
    	return $this->belongsToMany('App\Supplier','suppliers_stores','store_id','supplier_id')->withPivot('lead_time_days')->withTimestamps();
    }
}
