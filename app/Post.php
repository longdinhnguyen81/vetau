<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = true;
    public $fillable = ['title', 'description', 'detail', 'keywords', 'picture', 'active'];
}
