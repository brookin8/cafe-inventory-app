<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLevel extends Model
{
    public function users() {
    	return $this->hasMany('App\User');
    }

    protected $table = 'access_levels';
}
