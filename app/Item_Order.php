<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item_Order extends Model
{

    protected $table = 'items_orders';
    protected $primaryKey = 'id';
    
}
