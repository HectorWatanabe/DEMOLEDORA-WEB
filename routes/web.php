<?php

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

Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

Route::get('/', [
	'as' => 'welcome',
	'uses' => 'StoreController@index'
]);

Route::get('/about', [
	'as' => 'about',
	'uses' => 'StoreController@about'
]);

Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'StoreController@contact'
]);

Route::get('/shop', [
	'as' => 'shop',
	'uses' => 'StoreController@shop'
]);

Route::get('/product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

// Authentication routes...
Route::get('login', [
	'as' => 'login',
	'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('login', [
	'as' => 'login-post',
	'uses' => 'Auth\LoginController@login'
]);

Route::get('logout', [
	'as' => 'logout',
	'uses' => 'Auth\LoginController@logout'
]);

// Registro routes...
Route::get('register', [
	'as' => 'register-get',
	'uses' => 'Auth\RegisterController@showRegistrationForm'
]);

Route::post('register', [
	'as' => 'register-post',
	'uses' => 'Auth\RegisterController@register'
]);


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Carrito -----------------

Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}', [
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

Route::get('order-ready', [
	'middleware' => 'auth',
	'as' => 'order-ready',
	'uses' => 'CartController@success'
]);