<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function comments()
    {
        return $this->hasMany(Comment::class);
    }
    function tags()
    {
        return $this->hasMany(Tag::class);
    }
}