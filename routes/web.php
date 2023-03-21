<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [PageController::class,'getIndex']);

Route::get('product_categories', [PageController::class,'getProductCategory']); 

Route::get('product', [PageController::class,'getProduct']);

Route::get('contact', [PageController::class,'getContact']);

Route::get('about', [PageController::class,'getAbout']);