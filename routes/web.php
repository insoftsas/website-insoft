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
Route::get('artisan', function (Request $request) {
	if(!$request->has('command')){
		return 'No se ha enviado el comando';
	}
    $exit = Artisan::call($request->get('command'));
    return $exit;
});
