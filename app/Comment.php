<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function posts()
    {
        return $this->belongsTo(Post::class); 
    }
}
