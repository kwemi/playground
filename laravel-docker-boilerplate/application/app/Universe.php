<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    protected $fillable = ['floor_id', 'name', 'color_code', 'is_active'];

    public function booths() {
        return $this->hasMany('App\Booth');
    }
}
