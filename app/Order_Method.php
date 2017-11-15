<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Method extends Model
{
    use SoftDeletes;
    protected $table = 'order_methods';
    protected $dates = ['deleted_at'];

    public function suppliers() {
    	return $this->hasMany('App\Supplier');
    }

}
