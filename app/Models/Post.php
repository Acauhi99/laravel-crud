<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function post_content()
    {
        return $this->hasOne('App\Content');
    }

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
