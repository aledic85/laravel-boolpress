<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

      'title',
      'content'
    ];

    function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
