<?php

namespace App\Http\Controllers\Train;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Train;
use Session;
use Mail;

class CartController extends Controller
{
    public function cart(Request $request){
 
    	$time = $request->time;
    	$people = $request->people;
    	$from = $request->from;
    	$date = $request->date;

    	$train = Train::where('train_from', 'like', '%'. $from. '%')->first();

    	if(!$train){
    		return redicrect()->route('errors.404');
    	}
		if($time && $people && $from && $date){
			$cart = array([
				'title' => $train->title,
				'time' => $time,
				'people' => $people,
				'from' => $from,
				'date' => $date,
				'cost' => $train->recost,
			]);
    		$request->session()->put('cart', $cart);
		}
    	return view('train.cart.cart');
    }

    public function destroy(Request $request){
    	Session::forget('cart');
    	$request->session()->put('cart', []);
    	return redirect()->route('train.index.index');
    }

    public function checkout(){
    	if(count(Session::get('cart')) < 1){
    		return redirect()->route('train.index.index');
    	}
    	return view('train.cart.checkout');
    }
    public function thanhtoan(){
    	Mail::send('mailfb',array(['name' => 'Tài']),function($message){
            $message->to('dailyvetaulyson@gmail.com','Visitor')->subject('Đặt vé tàu online');
        });
    	return redirect()->route('train.index.about');
    }
}
