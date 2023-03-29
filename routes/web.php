<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;


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

Route::get('index', [PageController::class,'getIndex'])->name('index');

Route::get('ultility', [PageController::class,'getProductUltility'])-> name('ultility'); 

Route::get('shoes', [PageController::class,'getProductShoes'])-> name('shoes'); 

Route::get('product_categories/{type}', [PageController::class,'getProductCategory'])-> name('product_categories'); 

Route::get('product/{id}', [PageController::class,'getProduct'])->name('product');

Route::get('contact', [PageController::class,'getContact'])->name('contact');

Route::get('about', [PageController::class,'getAbout'])-> name('about');

Route::get('login', [PageController::class, 'getLogin']) -> name('login');

Route::get('register', [PageController::class,'getRegister'])->name('register');

Route::post('register',[PageController::class,'postRegister'])->name('register');

Route::post('login', [PageController::class, 'postLogin']) -> name('login');

Route::get('logout', [PageController::class, 'getLogout']) -> name('logout');

Route::get('forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot-password');

Route::get('forgot-password/{token}', [ForgotPasswordController::class, 'forgotPasswordValidate']);

Route::post('forgot-password', [ForgotPasswordController::class, 'resetPassword'])->name('forgot-password');

Route::put('reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('reset-password');

Route::get('cart/{id}', [PageController::class, 'addCart'])->name('cart');