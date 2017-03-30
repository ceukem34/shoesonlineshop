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
Route::auth();

	Route::get('order/add', 'orderController@create');
	Route::post('order/add', 'orderController@store');
	Route::get('/', 'homeController@index');
Route::group(['middleware'=>'auth'], function(){
	
	Route::get('order', 'orderController@index');
	Route::patch('order/{id}/edit', 'orderController@update');
	Route::delete('order/{id}/delete', 'orderController@destroy');
	
	Route::get('pelanggan', 'pelangganController@index');
	Route::get('pelanggan/add', 'pelangganController@create');
	Route::post('pelanggan/add', 'pelangganController@store');
	
	Route::get('pelanggan/{id}/edit', 'pelangganController@edit');
	Route::patch('pelanggan/{id}/edit', 'pelangganController@update');
	Route::delete('pelanggan/{id}/delete', 'pelangganController@destroy');


	Route::get('sepatu', 'sepatuController@index');
	Route::get('sepatu/add', 'sepatuController@create');
	Route::post('sepatu/add', 'sepatuController@store');

	Route::get('sepatu/{id}/edit', 'sepatuController@edit');
	Route::patch('sepatu/{id}/edit', 'sepatuController@update');
	Route::delete('sepatu/{id}/delete', 'sepatuController@destroy');

	Route::get('penjualan', 'penjualanController@index');
	Route::get('penjualan/add', 'penjualanController@create');
	Route::post('penjualan/add', 'penjualanController@store');

	Route::get('penjualan/{id}/edit', 'penjualanController@edit');
	Route::patch('penjualan/{id}/edit', 'penjualanController@update');
	Route::delete('penjualan/{id}/delete', 'penjualanController@destroy');
	
	
});