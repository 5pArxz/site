<?php

namespace App\Posts;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];
    protected $dates = ['published_at'];
}
