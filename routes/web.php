<?php
use Illuminate\Console\Command;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('artisan', function () {
    $exit=Artisan::call("passport:install");
    return $exit;
});
Route::get('t', function () {
	$us = \App\User::find(3)->tokens[1];
	dd(  );
    if ( property_exists( json_decode($us->last_access) , "location") ) {

    }
});
