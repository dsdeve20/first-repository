<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Customers;
use App\Http\Controllers\Api\BasicApiController;

use App\Http\Controllers\Api\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return $request->user();
// });


Route::get('/products', function () {
     $items = Customers::paginate(5);
      return response()->json($items);
});

// Beginner Level api
// Example of a route using a controller method
Route::get('/agents', [BasicApiController::class, 'index']);

// Route::group(['middleware' => 'auth'], function () {

//     Route::get('/home', [
//         'as' => 'home',
//         'uses' => 'Dashboard\DashboardController@dashboard'
//     ]);  

//     Route::pattern('users', '\d+');
//     Route::resource('users','UserController'); 

//    // more route definitions

// });

Route::post('loginx', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

