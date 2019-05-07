<?php

namespace App\Http\Controllers\Train;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index(){
    	$posts = Post::where('active', 1)->paginate(4);
    	$rands = Post::where('active', 1)->inRandomOrder()->limit(4)->get();
    	return view('train.post.index', compact('posts', 'rands'));
    }
    public function detail($slug, $id){
    	$rands = Post::where('active', 1)->inRandomOrder()->limit(4)->get();
    	$post = Post::find($id);
    	return view('train.post.detail', compact('rands', 'post'));
    }
}
