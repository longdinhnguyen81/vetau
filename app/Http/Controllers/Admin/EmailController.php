<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Email;

class EmailController extends Controller
{
    public function index(){
    	$emails = Email::all();
    	return view('admin.email.index', compact('emails'));
    }
    public function delete($id){
    	$email = Email::find($id);
    	$email->delete();
    	return redirect()->route('admin.email.index');
    }
}
