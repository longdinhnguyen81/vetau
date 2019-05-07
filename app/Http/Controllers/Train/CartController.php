<?php

namespace App\Http\Controllers\Train;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Train;
use Session;
use Mail;
use App\Cart;
use App\CartTrain;

class CartController extends Controller
{
    public function cart(Request $request){
 
        $cart = [];
    	$time = $request->time;
    	$people = $request->people;
    	$from = $request->from;
    	$date = $request->date;

    	$train = Train::where('train_from', 'like', '%'. $from. '%')->first();

    	if(!$train){
    		return redirect()->route('train.index.index');
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
    public function thanhtoan(Request $request){
        $request->validate([
            'name' => 'required',
            'cmnd' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $carts = Session::get('cart');
        $date = date_create($carts[0]['date']);
        $email = $request->email;
        $cart = new Cart([
            'fullname' => $request->name,
            'cmnd' => $request->cmnd,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'date' => $date,
        ]);
        $cart->time = $carts[0]['time'];
        $cart->people = $carts[0]['people'];
        $cart->save();
        $train = Train::where('title', 'like', '%'.$carts[0]['title'].'%')->first();

        $carttrain = new CartTrain([
            'cart_id' => $cart->id,
            'train_id' => $train->id,
        ]);
        $carttrain->save();
        if($train){
            Mail::send('mailfb',array(
                'name' => $request->name,
                'type' => $request->type,
                'time' => $cart->time,
                'date' => $cart->date,
                'train_from' => $train->train_from,
                'people' => $carts[0]['people'],
                'cost' => $train->recost,
                'id' => $cart->id,
            ),function($message) use ($email){
                $message->to($email,'Đại lý vé tàu')->subject('Đặt vé tàu đi Lý Sơn');
            });

            Mail::send('home',array(
                'name' => $request->name,
                'type' => $request->type,
                'time' => $cart->time,
                'date' => $cart->date,
                'phone' => $request->phone,
                'cmnd' => $request->cmnd,
                'train_from' => $train->train_from,
                'people' => $cart->people,
                'cost' => $train->recost,
                'id' => $cart->id,
            ),function($message){
                $message->to('dailyvetaulyson@gmail.com','Đại lý vé tàu')->subject('Đặt vé tàu đi Lý Sơn');
            });
        }
            
        Session::forget('cart');
        $request->session()->put('cart', []);

        return redirect()->route('train.index.success');
    }
}
