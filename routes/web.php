<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemDetailController;

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
Route::post('/contact', [ContactController::class,'submit']);
Route::view('/itemList', 'itemList');
Route::get('/itemDetail/{id}', [ItemDetailController::class, 'show']);