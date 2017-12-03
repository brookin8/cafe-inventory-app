<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'store_id','access_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function access_level() {
        return $this->belongsTo('App\Access_Level','access_id','id');
    }

    public function store() {
        return $this->belongsTo('App\Store','store_id','id');
    }

    public function orders() {
        return $this->hasMany('App\Order','id','created_by');
    }

    public function inventorycounts() {
        return $this->hasMany('App\Inventorycount','id','created_by');
    }

    public function invoices() {
        return $this->hasMany('App\Invoice','id','created_by');
    }
}
