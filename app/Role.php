<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function book() {
        return $this->hasMany('App\User');
    }
}