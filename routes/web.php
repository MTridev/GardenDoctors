<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


//To use the Usercontroller, UserController is imported

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



// Below are the routes and their relative function name
// e.g detail/{id} route and its function name detail


Route::view("/login","login");
Route::post("login",[UserController::class,'login']);

Route::get('/logout',function (){

    // Erasing session from browser with forget function with
    // key 'user'
    Session::forget('user');
    return redirect(('/login'));
});



Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("addtocart",[ProductController::class,'additionToCart']);
Route::get("cartlisting",[ProductController::class,'cartListFunction']);
Route::get("removefromCart/{id}",[ProductController::class,'removefromCartFunction']);




