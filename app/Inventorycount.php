<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventorycount extends Model
{
    public function stores() {
    	return $this->belongsTo('App\Store');
    }

    public function items() {
    	return $this->belongsToMany('App\Item', 'items_inventorycounts','inventorycount_id','item_id')->withPivot('iventorycount_qty,inventory_dollar_amount')->withTimestamps();;
    }
}
