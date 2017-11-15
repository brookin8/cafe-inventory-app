<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item_Order extends Model
{
    use SoftDeletes;
    protected $table = 'items_orders';
    protected $dates = ['deleted_at'];
}
