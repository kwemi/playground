<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoothLevel extends Model
{
    protected $fillable = ['booth_id','name', 'svg_map', 'order', 'is_active'];

    public function configurations() {
        return $this->hasMany('App\Configuration');
    }
}
