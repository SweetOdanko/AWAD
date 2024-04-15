<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemDetailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Auth\Events\Login;

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
Route::get('/home', [HomeController::class,'home']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/contact', [ContactController::class,'contact']);
Route::post('/contact', [ContactController::class,'submitForm']);
Route::view('/itemList', 'itemList');
Route::get('/itemList',[ItemListController::class,'index']);
Route::get('/search', [ItemListController::class,'search'])->name('search');
Route::post('/search', [ItemListController::class,'search']);
Route::post('/filter', [ItemListController::class,'filter']);
Route::get('/itemDetail/{id}', [ItemDetailController::class, 'show']);

Route::get('/login',[LoginController::class,'getLoginForm']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/register',[RegisterController::class,'showRegisterForm']);
Route::post('/register',[RegisterController::class,'createUser']);




// Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
// Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
// Route::post('/login/admin', [LoginController::class,'adminLogin']);
// Route::post('/register/admin', [RegisterController::class,'createAdmin']);

// Route::get('/login/support', [LoginController::class, 'showSupportLoginForm']);
// Route::get('/register/support', [RegisterController::class,'showSupportRegisterForm']);
// Route::post('/login/support', [LoginController::class,'supportLogin']);
// Route::post('/register/support', [RegisterController::class,'createSupport']);

// Route::group(['middleware' => 'auth:admin'], function () {
//     Route::view('/admin', 'admin');
// });
// Route::group(['middleware' => 'auth:support'], function() {
//     Route::view('/support', 'support');
// });
Route::get('/logout', [LoginController::class,'logout1']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [CartController::class,'showcart']);
Route::post('/add-to-cart', [CartController::class,'addToCart'])->name('addToCart');
Route::get('/checkout-show', [CheckoutController::class, 'showCheckout'])->name('checkout-show');
Route::put('/cart-increment', [CartController::class, 'increment'])->name('cart.increment');
Route::put('/cart-decrement', [CartController::class, 'decrement'])->name('cart.decrement');
Route::delete('/cart-delete', [CartController::class, 'delete'])->name('cart.delete');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');