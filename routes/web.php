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

Route::post('/thread/{thread}/comments', 'CommentsController@store')->name('thread.comments');

Route::namespace('Event')
    ->group(function(){
        Route::get('/events', 'EventController@index')->name('events.index');
    });

Route::namespace('Chat')
    ->group(function(){
        Route::resource('/chat', 'ChatController');
    });

Route::namespace('Forum')
    ->group(function (){
       Route::resource('/forum', 'ForumController');

       Route::get('/forum/create', 'ForumController@create')
            ->name('forum.create')
            ->middleware('auth');

        Route::get('/forum/search', 'SearchThreadController@search')
            ->name('forum.search');
    });

Route::get('/', 'MainPageController@index');
