<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//items
Route::get('/api/v1/items', 'ItemController@all');
Route::get('/api/v1/item/{id}', 'ItemController@show');


//users
Route::get('/api/v1/users', 'UserController@all');
Route::get('/api/v1/user/{id}', 'UserController@show');
Route::get('/api/v1/user/store', 'UserController@store');

// orders
Route::get('api/v1/orders', 'OrderController@all');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
