<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use Mail;

class CartController extends Controller
{
    public function index(){
    	$carts = Cart::with('train')->get();
    	return view('admin.cart.index', compact('carts'));
    }
    public function delete($id){
    	$carts = Cart::find($id);
    	$carts->delete();
    	return redirect()->route('admin.cart.index')->with('msg', 'Xoá thành công');
    }

    //trang chủ gởi email
     public function goiEmail(Request $request){
        $input = $request->all();
        Mail::send('mailfb',array(['name' => 'Tài']),function($message){
            $message->to('taiembkdn@gmail.com','Visitor')->subject('Đặt vé tàu online');
        });
        return redirect()->route('trangchu.pages.trangchu')->with('thongbao','Đặt tour thành công');
    }
}
