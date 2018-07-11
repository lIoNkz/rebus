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
Route::get('/brand/{id?}', 'FrontendController@brand');
Route::get('/category/{id?}', 'FrontendController@category');
Route::get('/product/{id?}', 'FrontendController@product');
Route::get('/service', 'FrontendController@service');
Route::get('/vacancies', 'FrontendController@vacancy');
Route::get('/fillform', 'FrontendController@fillform');
Route::get('/contacts', 'FrontendController@contacts');


Auth::routes();

Route::get('/home', 'HomeController@index');