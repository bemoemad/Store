<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
    return view('index');
});

Route::get('/admin',function (){
     return view('back.home');
});

// Route::get('/categories',function (){
//      return view('back.categories.index');
// });

//-------------------------Categories Start--------------------------
Route::group(['prefix' => 'categories'] , function (){
    
    Route::get('/show',[CategoryController::class,'index']);
    Route::get('/create-category',[CategoryController::class,'create']);
    Route::post('/store-category',[CategoryController::class,'store']);
    Route::get('/show-products/{id}',[CategoryController::class,'show_products']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroy']);

});


//-------------------------Categories Ends--------------------------




Route::get('/products',[ProductController::class,'index']);
Route::get('/create-product',[ProductController::class,'create']);
Route::post('/store-product',[ProductController::class,'store']);