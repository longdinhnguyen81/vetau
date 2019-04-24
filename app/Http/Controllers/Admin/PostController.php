<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index(){
    	$news = Post::orderBy('id', 'desc')->get();
    	return view('admin.post.index', compact('news'));
    }
    public function getAdd(){
    	return view('admin.post.add');
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'title' => 'required|unique:posts',
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
            'picture' => 'required',
    	]);
    	$news = new Post([
    		'title' => $request->title,
            'description' => $request->description,
    		'detail' => $request->detail,
    	]);

        if($request->file('picture') != null){
                $path1 = $request->file('picture');
                $picture =  $path1->store('/', ['disk' => 'upload']);
                $news->picture = $picture;
            
        }
        $news->keywords = $request->keywords;
    	$news->save();
        

    	return redirect(route('admin.post.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$news = Post::where('id', $id)->first();
    	return view('admin.post.edit', compact('news'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'title' => 'required|unique:posts,title,'.$id,
            'description' => 'required',
    		'keywords' => 'required',
    		'detail' => 'required',
    	]);
    	$news = Post::where('id', $id)->first();
        if($request->file('picture') != null){
            $path1 = $request->file('picture');
            $picture =  $path1->store('/', ['disk' => 'upload']);
            $app_path = str_replace("\\", '/', public_path());
            $file_path = $app_path.'/upload/'.$news->picture;
            $news->picture = $picture;
            if (file_exists($file_path)){
                unlink($file_path);
            }
        }

    	$news->title = $request->title;
    	$news->keywords = $request->keywords;
    	$news->description = $request->description;
        $news->detail = $request->detail;
        

    	$news->update();

        
    	return redirect(route('admin.post.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$news = Post::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$news->picture;
        if (file_exists($file_path)){
            unlink($file_path);
        }
    	$news->delete();
    	return redirect(route('admin.post.index'))->with('msg', 'Xoá thành công');
    }
}
