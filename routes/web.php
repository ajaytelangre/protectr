<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('product');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/policy', function () {
    return view('policy');
});

Route::view('/contact','contact');

Route::POST('/payment_initiate_request',[UserController::class,'Initiate']);
Route::POST('/payment_success',[UserController::class,'payment_success']);
Route::GET('/form',[UserController::class,'form']);