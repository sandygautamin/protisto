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
Route::get('/', 'Frontend\HomeController@index');
Auth::routes();
Route::get('/home', 'Frontend\HomeController@index')->name('home');
Route::get('/checkout', 'Frontend\CheckoutController@checkout')->name('checkout');
Route::post('/contact_us','Frontend\HomeController@contact_us')->name('contact_us');
Route::prefix('admin')->group(function () {  
	Route::get('/orders', 'Admin\OrdersController@index')->name('admin.orders');
	Route::get('order/view/{id}', 'Admin\OrdersController@view')->name('orders');
	Route::get('order/destroy/{id}', 'Admin\OrdersController@destroy')->name('orders.destroy');
	Route::get('order/user_orders/{id}', 'Admin\OrdersController@user_orders')->name('orders.user_orders');	 
});