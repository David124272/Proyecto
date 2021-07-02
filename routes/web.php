<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;

use App\Models\File;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Home
Route::get('/', function () {
    return view('index');
});

// Mail verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Product routes
Route::get('/product/filter/{category}', [ProductController::class, 'filter'])->name('product.filter');
Route::post('/product/add', [ProductController::class, 'addToCart'])->name('product.cart');
Route::resource('product', ProductController::class);

// Cart
Route::get('/cart', [CartController::class, 'show'])->name('cart.show')->middleware('auth');
Route::get('cart/clear/{cart}', [CartController::class, 'clear'])->name('cart.clear')->middleware('auth');
Route::get('cart/checkout/{cart}', [CartController::class, 'checkout'])->name('cart.checkout')->middleware('auth');

// Purchases
Route::resource('purchase', PurchaseController::class)->only(['store', 'index'])->middleware('auth');

// Contact
Route::get('/contact', function () {
    return view('contact.contact');
});

// Files
Route::get('/files', function () {
    $files = File::all();
    return view('file.file-index', compact('files'));
});
