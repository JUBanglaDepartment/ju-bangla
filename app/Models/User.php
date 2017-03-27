<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;


class User extends Model
{
    protected $table = 'users';

    public function users()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
