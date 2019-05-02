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

Route::get('/', 'PagesController@index');

Route::get('/NotFound',function(){
    return view ('pages.notfound');
});

Route::post('search', [
    'uses' => 'PostController@search'
  ]);

Route::get('/mycart',function(){
  return view('person.mycart');
});

Route::resource('books','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('request','RequestsController');