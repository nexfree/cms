<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    protected $fillable = [
        'slug',
        'title',
        'image',
        'layout',
        'author',
        'description'
    ];
}
