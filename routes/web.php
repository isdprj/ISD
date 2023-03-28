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

Route::get('product', [PageController::class,'getProduct'])->name('product');

Route::get('contact', [PageController::class,'getContact'])->name('contact');

Route::get('about', [PageController::class,'getAbout'])-> name('about');

Route::get('login', [PageController::class, 'getLogin']) -> name('login');

Route::get('register', [PageController::class,'getRegister'])->name('register');

Route::post('register',[PageController::class,'postRegister'])->name('register');

Route::post('login', [PageController::class, 'postLogin']) -> name('login');

Route::get('logout', [PageController::class, 'getLogout']) -> name('logout');

Route::resource('reset-password', ForgotPasswordController::class);
Route::resource('forget-password', ForgotPasswordController::class);

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm']) -> name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm']) -> name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm']) -> name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm']) -> name('reset.password.post');