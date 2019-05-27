<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

      'category',
      'title',
      'content',
      'category_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
