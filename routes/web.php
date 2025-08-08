<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/whislist', function () {
    return view('whislist');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/details', function () {
    return view('details');
});

