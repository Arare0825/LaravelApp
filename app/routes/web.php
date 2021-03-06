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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PostController@index')->name('post.index');

Route::get('posts', 'PostController@create')->name('post.create');

Route::post('/', 'PostController@store')->name('post.store');

Route::get('/posts/{id}', 'PostController@show')->name('post.show');

Route::post('comments', 'CommentsController@store')->name('comments.store');