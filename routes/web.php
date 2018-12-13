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
    return view('admin.layouts.app');
});

Route::prefix('car')->group(function () {
	Route::get('add','CarController@create');
	Route::post('add','CarController@store');
	Route::get('/','CarController@index');
	Route::get('edit/{id}','CarController@edit');
	Route::post('edit/{id}','CarController@update');
	Route::delete('{id}','CarController@destroy');
});

Route::prefix('blog')->group(function () {
	Route::get('create','BlogController@create');
	Route::post('post','BlogController@store');
	Route::get('/','BlogController@index');
	Route::get('edit/{id}','BlogController@edit');
	Route::post('update','BlogController@update');
	Route::get('delete/{id}','BlogController@destroy');
});

Route::prefix('kategori')->group(function () {
	Route::get('create','KategoriController@create');
	Route::post('post','KategoriController@store');
	Route::get('/','KategoriController@index');
	Route::get('edit/{id}','KategoriController@edit');
	Route::post('update','KategoriController@update');
	Route::get('delete/{id}','KategoriController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
