<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function() {
    return view('login');
});
Route::get('/logout', function() {
    session()->forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::post("/login",[userController::class,'login']);
Route::post("/register",[userController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::get("/search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartlist']);
Route::get("removecart/{id}",[ProductController::class,'removecart']);
Route::get("ordernow",[ProductController::class,'ordernow']);
Route::post("orderplace",[ProductController::class,'orderplace']);
Route::get("myOrder",[ProductController::class,'myOrder']);  