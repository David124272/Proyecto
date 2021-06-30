<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use DeepCopy\Filter\Filter;
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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/product/filter/{category}', [ProductController::class, 'filter'])->name('product.filter');
Route::post('/product/add', [ProductController::class, 'addToCart'])->name('product.cart');
Route::resource('product', ProductController::class);

Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
