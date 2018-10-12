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

Route::resource('post', 'PostsController');

Route::post('/comment/store', 'CommentsController@store')->middleware('auth');

Route::post('/notification/get', 'NotificationsController@get');
Route::post('/notification/read', 'NotificationsController@read');

Route::get('/notifications', 'NotificationsController@index')->name('notifications');