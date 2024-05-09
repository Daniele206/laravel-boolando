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

Route::get('/', function () {
    $products = config('products.products');

    return view('home', compact('products'));
})->name('Home');

Route::get('/donna', function () {
    return view('donna');
})->name('Donna');

Route::get('/uomo', function () {
    return view('uomo');
})->name('Uomo');

Route::get('/bambini', function () {
    return view('bambini');
})->name('bambini');

Route::get('/like', function () {
    return view('like');
})->name('like');

Route::get('/carrello', function () {
    return view('carrello');
})->name('carrello');
