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
	return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/post/store', 'PostsController@store')->middleware('auth');
Route::get('/post/{id}', 'PostsController@show')->name('post.show')->middleware('auth');

Route::post('/comment/store', 'CommentsController@store')->middleware('auth');

Route::post('/notification/get', 'NotificationsController@get');
Route::post('/notification/read', 'NotificationsController@read');