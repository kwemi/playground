<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name','address', 'is_active'];

    public function floors() {
        return $this->hasMany('App\Floor');
    }
}
