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

Route::group(['prefix' => 'admin'], function () {

    /*
    Dentro de resouruce( 'faqs') "faqs" significa lo que tendremos que escribir en la url para entrar en la página, 
    en este caso tendremos que escribir www.dev-asociacion-mascotas.com/admin/faqs
    Tendremos que decir también que controlador queremos cargar, en este caso el controlador que estamos cargando se llama
    "FaqController" y se encuentra dentro de la carpeta /app/http/controllers/admin
    
    En Internet una web es enviada desde el servidor al usuario a través de un protocolo llamado 
    HTTP/S. La información enviada a través de este protocolo llega a los puertos 80 (no-seguro) o al 443 (seguro). Cuando instalamos
    en el servidor un programa para convertirlo en un servidor web (por ejemplo, Nginx o Apache) estos se van a responsabilizar de
    gestionar esos puertos para detectar si hay llamadas o hay que hacer envios de datos. 
    Las llamadas que hacemos por HTTP tiene principalmente 4 métodos (verbos) que son:
    - GET: Esto significa que hacemos una llamada que va a pedir datos al servidor. 
    - POST: Esto significa que hacemos una llamada que va a enviar datos al servidor.
    - PUT: Esto signifca que hacemos una llamada que va a actualizar datos en el servidor.
    - DELETE: Esto significa que hacemos una llamada que va a eliminar datos en el servidor. 
    Estos métodos HTTP se corresponden con los métodos que vamos a tener en el controlador:
    - index, create, edit show  serán llamadas de tipo GET
        -- En index pediremos todos los datos de una tabla de la base de datos
        -- En create pediremos que nos limpie el formulario.
        -- En edit o show pediremos que nos pase sólo un registro de la tabla (por una id)
    - store será una llamada de tipo POST
        -- En store guardaremos los datos que hayamos añadido en el formulario, nos servirá tanto para guardar datos nuevos como actualizarlos
    - destroy será una llamada de tipo DELETE
        -- En destroy lo que haremos es borrar un dato de la base de datos 
    */

    // 'clientes'

    Route::resource('clientes', 'App\Http\Controllers\Admin\ClientController', [
        'parameters' => [
            'clientes' => 'client'
        ],
        'names' => [
            'index' => 'clients',
            'create' => 'clients_create',
            'edit' => 'clients_edit',
            'show' => 'clients_show',
            'store' => 'clients_store',
            'destroy' => 'clients_destroy'
        ]
    ]);

    Route::resource('ventas', 'App\Http\Controllers\Admin\SellController', [
        'parameters' => [
            'ventas' => 'sell'
        ],
        'names' => [
            'index' => 'sells',
            'create' => 'sells_create',
            'edit' => 'sells_edit',
            'show' => 'sells_show',
            'store' => 'sells_store',
            'destroy' => 'sells_destroy'
        ]
    ]);

    Route::resource('contacto', 'App\Http\Controllers\Admin\ContactController', [
        'parameters' => [
            'contacto' => 'contact'
        ],
        'names' => [
            'index' => 'contacts',
            'create' => 'contacts_create',
            'edit' => 'contacts_edit',
            'show' => 'contacts_show',
            'store' => 'contacts_store',
            'destroy' => 'contacts_destroy'
        ]
    ]);

    Route::resource('usuarios', 'App\Http\Controllers\Admin\UserController', [
        'parameters' => [
            'usuarios' => 'user',
        ],
        'names' => [
            'index' => 'users',
            'create' => 'users_create',
            'edit' => 'users_edit',
            'show' => 'users_show',
            'store' => 'users_store',
            'destroy' => 'users_destroy',
        ]
    ]);

    Route::resource('productos/categorias', 'App\Http\Controllers\Admin\ProductCategoryController', [
        'parameters' => [
            'categorias' => 'product_category',
        ],
        'names' => [
            'index' => 'product_categories',
            'create' => 'product_categories_create',
            'edit' => 'product_categories_edit',
            'store' => 'product_categories_store',
            'destroy' => 'product_categories_destroy',
            'show' => 'product_categories_show',
        ]
    ]);

    Route::resource('productos', 'App\Http\Controllers\Admin\ProductController', [
        'parameters' => [
            'productos' => 'product', 
        ],
        'names' => [
            'index' => 'products',
            'create' => 'products_create',
            'edit' => 'products_edit',
            'store' => 'products_store',
            'destroy' => 'products_destroy',
            'show' => 'products_show',
        ]
    ]);

    Route::resource('faqs', 'App\Http\Controllers\Admin\FaqController', [
        'parameters' => [
            'faqs' => 'faq',
        ],
        'names' => [
            'index' => 'faqs',
            'create' => 'faqs_create',
            'store' => 'faqs_store',
            'destroy' => 'faqs_destroy',
            'show' => 'faqs_show',
        ]
    ]);
});

Route::get('/', 'App\Http\Controllers\Front\HomeController@index')->name('front_home');

Route::get('/contacto', 'App\Http\Controllers\Front\ContactController@index')->name('front_contact');
Route::post('/contacto', 'App\Http\Controllers\Front\ContactController@store')->name('front_contact_store');

Route::get('/faqs', 'App\Http\Controllers\Front\FaqController@index')->name('front_faqs');

Route::group(['prefix' => 'productos'], function () {
    Route::get('', 'App\Http\Controllers\Front\ProductController@index')->name('front_products');
    Route::get('/{product}', 'App\Http\Controllers\Front\ProductController@show')->name('front_product');
    Route::get('/precio/{order}', 'App\Http\Controllers\Front\ProductController@indexByPrice')->name('front_product_index_by_price');
    Route::get('/categoria/{product_category}', 'App\Http\Controllers\Front\ProductCategoryController@showByCategory')->name('front_products_by_category');
});

Route::group(['prefix' => 'carrito'], function () {
    Route::get('/', 'App\Http\Controllers\Front\CartController@index')->name('front_cart');
    Route::post('/añadido', 'App\Http\Controllers\Front\CartController@store')->name('front_cart_store');
    Route::get('/add/{price_id}', 'App\Http\Controllers\Front\CartController@add')->name('front_cart_add');
    Route::get('/remove/{price_id}', 'App\Http\Controllers\Front\CartController@remove')->name('front_cart_remove');
});

Route::get('/checkout', 'App\Http\Controllers\Front\CheckoutController@index')->name('front_checkout');

Route::post('/comprado', 'App\Http\Controllers\Front\CheckoutController@store')->name('front_checkout_ended');

Route::post('/fingerprint', 'App\Http\Controllers\Front\FingerprintController@store');