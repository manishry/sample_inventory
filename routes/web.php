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
    return view('product');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('add/product', 'HomeController@addproduct')->name('product');
Route::post('store/product', 'HomeController@storeproduct')->name('storeproduct');
Route::get('set/product-details', 'HomeController@setproduct')->name('setproduct');
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

Route::get('chooseCategory','Homecontroller@ChooseCategory');
Route::get('view/product-details/{id}','HomeController@viewproduct')->name('viewproduct');
Route::get('edit/category/{id}', 'HomeController@editcategory');
Route::get('del/category/{id}', 'HomeController@deletecategory');
Route::post('update/category/{id}', 'HomeController@updatecategory');
Route::get('edit/product/{id}', 'HomeController@editproduct');
Route::post('update/product/{id}', 'HomeController@updateproduct');
Route::get('del/product/{id}', 'Homecontroller@deleteproduct');