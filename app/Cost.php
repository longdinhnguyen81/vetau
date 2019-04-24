<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    public $timestamps = false;
    public $fillable = ['cost', 'recost', 'time', 'train_from', 'train_id'];

    public function train(){
    	return $this->belongsTo('App\Train', 'train_id');
    }
    public function cart(){
    	return $this->belongsToMany('App\Cart');
    }
}
