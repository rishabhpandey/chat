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

Route::get('/', 'SaveChatController@login');
Route::get('chatPage', 'SaveChatController@chat');
Route::post('login', 'SaveChatController@index');
Route::post('logout', 'SaveChatController@login');
Route::post('chat','SaveChatController@store');
Route::get('getchat','SaveChatController@getMessages');
Route::get('getUsers','SaveChatController@getUsers');
