<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.customer');
})->name('customer');

Route::get('/about', function () {
    return view('customer.about');
})->name('about');

Route::get('/shop', function () {
    return view('customer.shop');
})->name('shop');

Route::get('/contact', function () {
    return view('customer.contact');
})->name('contact');

Route::get('/cart', function () {
    return view('customer.cart');
})->name('cart');

Route::get('/login', function () {
    return view('customer.login');
})->name('login');

Route::get('/register', function () {
    return view('customer.register');
})->name('register');

Route::get('/home', function () {
    return view('admin.home');
})->name('home');
