<?php
use Illuminate\Console\Command;
use Illuminate\Http\Request;
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
	if(!$request->has('key')){
		return 'No se ha enviado la clave';
	}
	if($request->get('key')!= 'segrith-dev'){
		return 'Clave incorrecta';
	}
    $exit = Artisan::call($request->get('command'));
    return $exit;
});
