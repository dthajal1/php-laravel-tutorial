<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductsController;
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

// return a view
Route::get('/', function () {
    // not a good idea to return view from here. 
    // instead we should return a controller that returns a view
    return view('home');
});

// products will be this endpoints name
Route::get("/products", [ProductsController::class, "index"])->name("products");


// Posts endpoints
Route::get("/posts/index", [PostsController::class, "index"]);