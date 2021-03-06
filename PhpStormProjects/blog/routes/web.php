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
Route::get('/',function () {
    return view('index');
});

Route::match(['get','post'],'wel/web/{id}{id2}', 'UserController@index' );

Route::post('/add','UserController@addNewUser');

Route::get('/viewUsers','UserController@viewAllUsers');

Route::get('/DeleteUser','UserController@DeleteUser');

Route::get('/UpdateUser','UserController@UpdateUser');
