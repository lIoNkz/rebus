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




Route::get('/', 'FrontendController@index');
Route::get('/news', 'FrontendController@news');
Route::get('/about', 'FrontendController@about');
Route::get('/warranty', 'FrontendController@warranty');
Route::get('/brand', 'FrontendController@brand');
Route::get('/category/{id?}', 'FrontendController@category');
Route::get('/subcategory/{id?}', 'FrontendController@subcategory');
Route::get('/product/{id?}', 'FrontendController@product');
Route::get('/service', 'FrontendController@service');
Route::get('/vacancies', 'FrontendController@vacancy');
Route::get('/fillform', 'FrontendController@fillform');
Route::get('/contacts', 'FrontendController@contacts');


Auth::routes();
Route::get('/home', 'HomeController@index');



Route::resource('categories', 'CategoryController');
Route::get('/categories/show_attr/{id}', 'CategoryController@show_attr')->name('show_attrs_of_category');
Route::get('/categories/add_attr/{id}', 'AttributeController@add_attr')->name('add_attr');



Route::resource('attributes', 'AttributeController');



Route::resource('products', 'ProductController');
Route::get('/products/show_values/{id}', 'ProductController@show_values')->name('show_values_of_product');
Route::get('/products/add_value/{id}', 'ValueController@add_value')->name('add_value');
Route::get('/products/edit_values/{value}/{product}', 'ValueController@edit_values')->name('edit_values');



Route::resource('values', 'ValueController');
