<?php

namespace App\Http\Controllers\Train;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Train;

class IndexController extends Controller
{
    public function index(){
    	return view('train.index.index');
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
        $people = $request->people;
        $trains = Train::where('train_from', 'like', '%'.$from.'%')->with('cost')->first();
        return view('train.index.vetau', compact('trains', 'date', 'people'));
    }
}
