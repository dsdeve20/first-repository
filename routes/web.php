<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [BasicController::class, 'index']);
Route::get('/fileupload', [BasicController::class, 'fileupload']);
Route::post('/fileupload', [BasicController::class, 'postfileupload']);

Route::get('/checkout', [BasicController::class, 'checkout']);
Route::get('/mobileheader', [BasicController::class, 'mobileheader']);
Route::get('/todolist', [BasicController::class, 'todolist']);