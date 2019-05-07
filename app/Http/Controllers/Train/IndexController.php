<?php

namespace App\Http\Controllers\Train;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Train;
use App\Post;

class IndexController extends Controller
{
    public function index(){
        $posts = Post::where('active', 1)->limit(4)->get();
    	return view('train.index.index', compact('posts'));
    }
    public function about(){
    	return view('train.index.about');
    }
    public function contact(){
    	return view('train.index.contact');
    }
    public function banggia(){
    	return view('train.index.banggia');
    }
    public function vetau(Request $request){
        $from = $request->from;
        $date = $request->dates;
        $day = explode('/', $date);
        $dates = date_create($day[1].'-'.$day[0].'-'.$day[2]);
        $people = $request->people;
        $trains = Train::where('train_from', 'like', '%'.$from.'%')->with('cost')->first();
        return view('train.index.vetau', compact('trains', 'dates', 'people', 'from'));
    }
    public function success(){
        return view('train.index.success');
    }
    public function sitemap(){
        $posts = Post::where('active', 1)->get();
        return response()->view('train.index.sitemap', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
}
