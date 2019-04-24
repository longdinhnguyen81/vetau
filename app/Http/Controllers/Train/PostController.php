<?php

namespace App\Http\Controllers\Train;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
    	return view('train.post.index');
    }
    public function detail(){
    	return view('train.post.detail');
    }
}
