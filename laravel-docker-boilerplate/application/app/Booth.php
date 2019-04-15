<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booth extends Model
{
    protected $fillable = ['universe_id','name', 'is_active'];
}
