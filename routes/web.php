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



// Here the login page is called, where the route is blanke

Route::get('/login', function () {
    return view('login');
});


Route::post('/login',[UserController::class, 'login']);
Route::get('/',[ProductController::class, 'index']);
