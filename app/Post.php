<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

      'category',
      'title',
      'content'
    ];

    function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
