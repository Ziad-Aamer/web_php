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

Route::post('/signup',[
    'uses' => 'UserController@signup'
]);

Route::post('/signin',[
    'uses' => 'UserController@signin'
]);

Route::post('/logout',[
    'uses' => 'UserController@logout'
]);

Route::put('/changepass',[
    'uses' => 'UserController@changepass'
]);


