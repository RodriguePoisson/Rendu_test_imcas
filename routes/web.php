<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[ProductController::class,'index']);
Route::get('/products',[ProductController::class,'index']);
Route::POST('/product/search',[ProductController::class,'search']);
Route::get('/products/{page}',[ProductController::class,'index']);

Route::get('/product/create',[ProductController::class,'create']);
Route::post('/product/create',[ProductController::class,'store']);

Route::post('/product/update',[ProductController::class,'update']);
Route::get('/product/update/{id}',[ProductController::class,'update_view']);


Route::get('/product/remove/{id}',[ProductController::class,'destroy']);
Route::get('/product/{id}',[ProductController::class,'show']);