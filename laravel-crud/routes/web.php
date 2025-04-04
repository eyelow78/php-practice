<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;



Route::get('/', ProductController::class .'@index')->name('products.index');
Route::post('/create', ProductController::class .'@store')->name('products.store');
Route::get('/create', function() {
    return view('products.create');
});
Route::get('/edit/{id}', ProductController::class .'@edit')->name('products.edit');
Route::post('/update/{id}', ProductController::class .'@update')->name('products.update');
Route::post('/delete/{id}', ProductController::class .'@destroy')->name('products.delete');