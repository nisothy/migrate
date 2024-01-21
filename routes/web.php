<?php

use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route::match(['get','post'],'/match', function () {
//     return ('This is match for Multiple Route & Parameters Route');
// });


// Route::get('/view/{id}', function ($id) {
//     return 'This is view id='.$id ;
// });

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/category', function () {
//     return view('category');
// });


// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/product', [ProductController::class, 'index']);
// Route::get('/category', [CategoryController::class, 'index']);


Route::get('test',function()
{
    return "<h1>testing</h1>";
});

//Multi Route


Route::match(['get','post'],'/match',function(){
    return 'Hello bbu';
});
//Parametter Route

route::get('/student/{id}',function($id){
    return "Stundent ID :". $id;}
);