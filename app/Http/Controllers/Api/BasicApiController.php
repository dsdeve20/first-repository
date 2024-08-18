<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BasicApiController extends Controller
{

  public function index(){
	  $ar= ["name"=>"deepak","last_name"=>"singh"];
    return response()->json($ar);
  }
}
