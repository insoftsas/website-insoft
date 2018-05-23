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

Route::get('/user',  'TokensManagerAPIController@user');
Route::get('/user/tokens', 'TokensManagerAPIController@index');
Route::get('/user/tokens/{id}', 'TokensManagerAPIController@show');
Route::delete('/user/tokens/{id}', 'TokensManagerAPIController@destroy');
Route::get('/user/logout', 'TokensManagerAPIController@logout');


Route::resource('groups', 'GroupAPIController');

Route::resource('makers', 'MakerAPIController');

Route::resource('enterprises', 'EnterpriseAPIController');