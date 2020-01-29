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
    return view('welcome');
});

Route::get('/', 'PostsController@index');
Route::get('posts/create', 'PostsController@create')->middleware('auth');
Route::post('posts/{post}/delete', 'PostsController@delete')->middleware('auth');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}','PostsController@show');
Route::post('posts/{post}/edit', 'PostsController@edit')->middleware('auth');
Route::post('posts/{post}/update', 'PostsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
