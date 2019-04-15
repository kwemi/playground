<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'hier_lvl_5',
        'hier_lvl_2',
        'hier_lvl_3',
        'hier_lvl_4',
        'article_model',
        'designation',
        'image_url',
        'category',
        'hash',
        'is_active'
    ];
}
