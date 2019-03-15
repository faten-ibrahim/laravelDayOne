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

// Route::get('/posts','PostsController@index');
// Route::get('7ga', function () {
//     return "<h1>Helloooo<h1>";
// });

// After sing api controller

Route::get('/posts','Api\PostsController@index');
Route::get('/posts/{post}','Api\PostsController@show');
Route::get('/users','Api\PostsController@showUsers'); // does not work

