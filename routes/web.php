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

Route::get('/', 'controller@index');

Route::get('/create', 'CreateController@index');
Route::get('/createSubmit', 'CreateController@create');
Route::get('/list', 'ListController@index');
Route::get('/edit', 'EditController@edit');
Route::get('/delete', 'EditController@delete');
Route::get('/editSubmit', 'EditController@editSubmit');
Route::get('/listController/ajax_getList', 'ListController@ajax_getList');

