<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = ['store_id','name', 'svg_map', 'order', 'is_active'];

    public function universes() {
        return $this->hasMany('App\Universe');
    }
}
