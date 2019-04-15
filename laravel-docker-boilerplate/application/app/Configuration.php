<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = ['booth_level_id','name', 'configuration', 'is_ratable'];
}
