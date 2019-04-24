<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cost;

class CostController extends Controller
{
    public function getAdd($id){
    	return view('admin.cost.add', compact('id'));
    }
    public function postAdd(Request $request, $id){
    	$request->validate([
    		'time' => 'required',
    	]);
    	$cost = new Cost([
            'time' => $request->time,
    		'train_id' => $id,
    	]);
    	$cost->save();
        
    	return redirect(route('admin.train.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id, $cid){
    	$costs = Cost::where('id', $cid)->where('train_id', $id)->first();
    	return view('admin.cost.edit', compact('costs', 'id', 'cid'));
    }
    public function postEdit(Request $request, $id, $cid){
    	$request->validate([
    		'time' => 'required',
    	]);
    	$costs = Cost::where('id', $cid)->where('train_id', $id)->first();

    	$costs->time = $request->time;

    	$costs->update();

        
    	return redirect(route('admin.train.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id, $cid){
    	$costs = Cost::where('id', $cid)->where('train_id', $id)->first();
    	$costs->delete();
    	return redirect(route('admin.train.index'))->with('msg', 'Xoá thành công');
    }
}
