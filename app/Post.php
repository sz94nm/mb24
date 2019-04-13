<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "title",
        "image",
        "description",
    ];
    protected $casts = [
        'image' => 'array',
    ];


}
