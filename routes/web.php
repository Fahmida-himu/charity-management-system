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


//Route::get('/', function () {
//    return view('admin.index');
//});
Route::get('/',function (){
    return view('admin.user.create');
});

Route::get('/create','UserController@create')->name('create');
Route::post('/userstore','UserController@store');

Route::get('/f','UserController@create');
Route::get('/fl/{user}','UserController@show')->name('show.user');
//Route::get('/login',['uses'=>'AuthController@ShowLogin','as'=>'login']);


Route::post('/login','AuthController@LoginProcess');
Route::get('login','AuthController@ShowLogin')->name('login');
//
Route::get('/logout','AuthController@logout')->name('log');
Route::get('/edit/{id}','UserController@edit')->name('edit');
