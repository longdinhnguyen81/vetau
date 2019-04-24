<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    public $timestamps = true;
    public $fillable = ['title', 'description', 'detail', 'keywords', 'date', 'from', 'cost', 'recost'];

    public function cost(){
    	return $this->hasMany('App\Cost');
    }
}
