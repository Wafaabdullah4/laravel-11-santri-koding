<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route resource untuk product
Route::resource('/products' , \App\Http\Controllers\ProductController::class);


// Route resouce untuk customers
Route::resource('/customers' , App\Http\Controllers\CustomerController::class);