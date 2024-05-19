<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});

*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('shops', function () {
        return view('shops');
    })->name('shops');
    Route::get('syscomproducts', function () {
        return view('syscomproducts');
    })->name('syscomproducts');
    Route::get('woocommercecomproducts', function () {
        return view('woocommercecomproducts');
    })->name('woocommercecomproducts');
});

/*

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

*/
