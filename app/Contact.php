<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    public $fillable = ['firstname', 'lastname', 'email', 'phone', 'message'];
}
