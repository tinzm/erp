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

Route::get('/', function () {
    return view('home');
});

Route::get('/accounts', 'AccountController@index');

Route::get('/salesOrder/{id}', 'SalesOrderController@index');

Route::post('/customer', 'CustomerController@store');

Route::get('/order/{id}', 'OrderController@show');

Route::get('/warehouse', 'WarehouseController@index');
Route::get('/admin', 'AdminController@index');

Route::get('/purchases', 'PurchasingOrderController@index');

Route::get('/purchase/{id}', 'PurchasingOrderController@show');

Route::get('/procurement/{id}/edit', 'ProcurementController@edit');
Route::post('/procurement/{id}', 'ProcurementController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');
