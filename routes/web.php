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
    return view('front.pages.home.index');
});

Route::get('/contacto', function () {
    return view('front.pages.contact.index');
});

Route::get('/carrito', function () {
    return view('front.pages.cart.index');
});

Route::get('/checkout', function () {
    return view('front.pages.checkout.index');
});

Route::get('/faqs', function () {
    return view('front.pages.faqs.index');
});

Route::get('/admin-panel', function () {
    return view('admin.pages.panel.index');
});

Route::get('/producto', function () {
    return view('front.pages.product.index');
});

Route::get('/productos', function () {
    return view('front.pages.products.index');
});