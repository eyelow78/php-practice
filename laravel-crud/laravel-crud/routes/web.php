<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('/', ProductController::class);
Route::post('/create-product', ProductController::class . '@store')->name('products.store');