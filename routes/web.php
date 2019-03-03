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

Route::get('/', 'PagesController@index')->name('home');	
Route::get('/about',function(){return view('pages.about');})->name('about');	
Route::get('/applications',function(){return view('pages.applications');})->name('applications');	
Route::get('/innovation',function(){return view('pages.innovation');})->name('innovation');	
Route::resource('/users', 'UsersController');
Route::resource('/products', 'ProductsController');
Route::resource('/news', 'NewsController');
Auth::routes();
