<?php

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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('front.pages.home.index');
});

Route::get('/contacto', function () {
    return view('front.pages.contact.contact');
});

Route::get('/carrito', function () {
    return view('front.pages.cart.cart');
});

Route::get('/checkout', function () {
    return view('front.pages.checkout.checkout');
});

Route::get('/faqs', function () {
    return view('front.pages.faqs.faqs');
});

Route::get('/admin', function () {
    return view('front.pages.panel.panel');
});

Route::get('/producto', function () {
    return view('front.pages.product.product');
});

Route::get('/productos', function () {
    return view('front.pages.products.products');
});