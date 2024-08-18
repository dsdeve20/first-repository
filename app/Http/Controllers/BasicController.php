<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{

  public function index(){
	  return view('index');
  }

  public function fileupload(){
    echo asset('uploads/1211232178.jpg');
die;
    $url = Storage::url('file.jpg');
    return view('fileupload');
  }

  public function postfileupload(Request $request){
    if($request->hasFile('file')){
      $file = $request->file('file');
      $originalname = $file->getClientOriginalName();
      $originalextension = $file->getClientOriginalExtension(); 
      $extension  = $file->extension(); 

       // Custom file name
       $customFileName = '.'.rand() .''. $file->getClientOriginalExtension();

       // Move Uploaded File with custom file name
       $path = $file->storeAs('assets/uploads', $customFileName);
       return $path;
      
    }
    echo '<pre>';
    print_r($request->all());
    die;
  }

  public function checkout(){
    return view('checkout');
  }

  
  public function mobileheader(){
    return view('mobileheader');
  }

  public function todolist(){
    return view('todolist');
  }
}
