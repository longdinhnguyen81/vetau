<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = true;
    public $fillable = ['fullname', 'cmnd', 'email', 'phone', 'date', 'active', 'activation_code'];

    public function cost(){
    	return $this->belongsToMany('App\Cost');
    }
}
