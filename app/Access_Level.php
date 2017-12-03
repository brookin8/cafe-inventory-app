<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access_Level extends Model
{
    public function users() {
    	return $this->hasMany('App\User');
    }

    protected $table = 'access_levels';
}
