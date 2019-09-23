<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::post('/post/create', 'PostsController@store')->name('posts.store');
Route::get('/post/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::post('/post/update/{id}', 'PostsController@update')->name('posts.update');
Route::delete('/post/delete/{id}', 'PostsController@delete')->name('posts.delete');
