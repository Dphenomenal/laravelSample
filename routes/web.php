<?php

/*
|--------------------------------------------------------------------------
| Web Routes  (Routing)
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/','PagesController@index');
Route::get('/aboutUs','PagesController@aboutUs');
