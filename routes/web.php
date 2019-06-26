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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('set/properties/{id}', 'HomeController@setproperties');
Route::get('add/properties', 'HomeController@addproperties');
Route::post('store/properties', 'HomeController@storeproperties');
Route::get('properties', 'HomeController@viewproperties')->name('properties');
Route::get('properties/edit/{id}', 'HomeController@edit');
Route::get('properties/del/{id}', 'HomeController@destroy');
Route::post('properties/update/{id}', 'HomeController@update');
Route::get('view/category', 'HomeController@viewcategory');
Route::post('add/properties/details', 'HomeController@addpropertiesdetails');
Route::get('add/category', 'HomeController@addcategory')->name('add');
Route::post('store/category', 'Homecontroller@storecategory')->name('store');
Route::get('/', 'HomeController@index');
