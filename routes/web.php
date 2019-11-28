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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Chat')
    ->group(function(){
        Route::resource('/chat', 'ChatController');
    });

Route::namespace('Forum')
    ->group(function (){
       Route::resource('/forum', 'ForumController');
    });

Route::get('/', 'MainPageController@index');
