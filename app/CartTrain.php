<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public $timestamps = false;
    public $fillable = ['train_id', 'cart_id'];

    public function cart()
    {
    	return $this->belongsTo('App\Cart', 'cart_id');
    }
    public function train()
    {
    	return $this->belongsTo('App\Train', 'train_id');
    }
}
