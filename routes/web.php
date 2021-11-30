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

Route::get('/uji-coba','Test\UjicobaController@index'); 
Route::post('/uji-coba/store','Test\UjicobaController@store')->name('uji-coba.store');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'books'],function(){
    route::get('/','BookController@index')->name('books');
    route::get('/create','BookController@create')->name('books.create');
    route::get('/edit','BookController@edit')->name('books.edit');
    route::post('/','BookController@index')->name('books');
    Route::post('/store','BookController@store')->name('books.store');

});

Route::group(['prefix'=>'bookreturn'],function(){
    route::get('/','PengembalianController@index')->name('bookreturn');
});
    
Route::group(['prefix'=>'user'],function(){
    route::get('/','UserController@index')->name('user');
    route::get('/create','UserController@create')->name('user.create');
    route::get('/edit','UserController@edit')->name('user.edit');

});

Route::group(['prefix'=>'card'],function(){
    route::get('/','CardController@index')->name('card');
});

Route::group(['prefix'=>'category'],function(){
    route::get('/','CategoryController@index')->name('category');
    route::get('/create','CategoryController@create')->name('category.create');
    Route::post('/store','CategoryController@store')->name('category.store');
});

Route::group(['prefix'=>'borrowings'],function(){
    route::get('/','BorrowingController@index')->name('borrowings');
});

Route::group(['prefix'=>'laporan'],function(){
    route::get('/','LaporanController@index')->name('laporan');
});

