<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventorycount extends Model
{
    public function stores() {
    	return $this->belongsTo('App\Store');
    }

    public function items() {
    	return $this->belongsToMany('App\Item', 'items_inventorycounts');
    }
}
