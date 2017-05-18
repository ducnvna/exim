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

Route::get('/' , 'CustomerController@index');
Route::match(['get', 'post'],'/add' , 'CustomerController@add');

Route::get('/shipment' , 'ShipmentController@index');
Route::match(['get', 'post'],'/shipment/add' , 'ShipmentController@add');


Route::get('/invoice' , 'InvoiceController@index');
Route::match(['get', 'post'],'/invoice/add' , 'InvoiceController@add');


Route::get('/statistic' , 'StatisticController@index');

Route::get('/admin' , 'AdminController@index');
Route::match(['get', 'post'],'/admin/add' , 'AdminController@add');