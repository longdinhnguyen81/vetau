<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Cart;
use Mail;

class AdminController extends Controller
{
    public function cart(Request $request){
    	$id = $request->id;
    	$carts = Cart::find($id);
    	$carts->active = 1;
    	$carts->update();
    	$email = $carts->email;
        Mail::send('success',array(
            'name' => $carts->fullname,
            'cmnd' => $carts->cmnd,
            'phone' => $carts->phone,
            'date' => $carts->date,
            'time' => $carts->time,
            'people' => $carts->people,
            'id' => $carts->id,
        ),function($message) use ($email){
            $message->to($email,'Visitor')->subject('Thanh toán thành công');
        });
        return '<td>Đã thanh toán</td>';
    }
    public function post(Request $request){
        $id = $request->id;
        $news = Post::find($id);
        if($news->active == 0){
            $news->active = 1;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/active.png" /></a>';
        }else{
            $news->active = 0;
            $return = '<a href="javascript:void(0)" onclick="return getActive('.$id.')" style="cursor:pointer"><img src="/templates/admin/img/icons/deactive.png" /></a>';
        }
        $news->save();
        return $return;
    }
}
