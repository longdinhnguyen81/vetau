<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Train;

class TrainController extends Controller
{
    public function index(){
    	$trains = Train::orderBy('id', 'desc')->with('cost')->get();
    	return view('admin.train.index', compact('trains'));
    }
    public function getAdd(){
    	return view('admin.train.add');
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:trains',
            'description' => 'required',
    		'keywords' => 'required',
            'train_from' => 'required',
            'recost' => 'required',
    		'detail' => 'required',
    		'picture' => 'required',
    	]);
    	$travel = new Train([
    		'title' => $request->title,
    		'slug' => str_slug($request->title),
            'description' => $request->description,
            'recost' => $request->recost,
    	]);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $travel->picture = $picture;
        }
        $travel->detail = $request->detail;
        $travel->keywords = $request->keywords;
        $travel->train_from = $request->train_from;
    	$travel->save();
    	

    	return redirect(route('admin.train.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$train = Train::where('id', $id)->first();
    	return view('admin.train.edit', compact('train'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:trains,title,'.$id,
            'description' => 'required',
    		'keywords' => 'required',
            'train_from' => 'required',
            'recost' => 'required',
    		'detail' => 'required',
    	]);
    	$train = Train::find($id);
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$train->picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
            $train->picture = $picture;
        }

    	$train->title = $request->title;
    	$train->keywords = $request->keywords;
        $train->train_from = $request->train_from;
        $train->recost = $request->recost;
    	$train->description = $request->description;
        $train->detail = $request->detail;
    	$train->update();
        
    	return redirect(route('admin.train.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$train = Train::with('cost')->get();
        foreach($train as $trai){
            $trai->cost->delete();
        }
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$train->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
    	$train->delete();
    	return redirect(route('admin.train.index'))->with('msg', 'Xoá thành công');
    }
}
