<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('user.home');
})->name('homePage');
Route::get('/katalog', function () {
    return view('user.katalog');
})->name('katalogPage');
Route::get('/product', function () {
    return view('user.product');
})->name('productPage');
Route::get('/akun', function () {
    return view('user.akun');
})->name('akunPage');


/* Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/navbar', function () {
    return view('navbar');
}); */
