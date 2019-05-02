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

Route::resource('/mycart','CartsController');

Route::resource('books','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('request','RequestsController');


//Eman
Route::get('/contact',['uses' => 'ContactMessageController@create']);

Route::post('/contact',[
	'uses' => 'ContactMessageController@store',
	'as' =>'contact.store'
  ]);

Route::get('/messages',[
	'uses' => 'ContactMessageController@getMessages',
	]);

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/about', function () {
    return view('pages.about');
});
