<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function inventorycounts() {
    	return $this->hasMany('App\Inventorycount');
    }

    public function invoices() {
    	return $this->hasMany('App\Invoice');
    }

    public function orders() {
    	return $this->hasMany('App\Order','store_id','id');
    }

    public function users() {
        return $this->hasMany('App\User');
    }

    public function items() {
    	return $this->belongsToMany('App\Item', 'items_stores','store_id','item_id')->withPivot('PARs')->withTimestamps();
    }

     public function suppliers() {
    	return $this->belongsToMany('App\Supplier','suppliers_stores','store_id','supplier_id')->withPivot('lead_time_days')->withTimestamps();
    }
}
