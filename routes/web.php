<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('/index',[CustomerController::class,'show']);
// Route::get('/index',[CustomerController::class,'show']);

Route::get('/market',[MarketController::class,'show']);
// Route::post('/market',[MarketController::class,'insert']);


// Route::get('/product',[ProductController::class,'show']);
// Route::post('/product',[ProductController::class,'insert']);

