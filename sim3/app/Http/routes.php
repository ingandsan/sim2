<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource ('sim', 'SimController');
Route::get('/', function () {
    return view('welcome');
});
Route::get('prueba', function () {
	return "hola desde routes";
});

Route::get('prueba', function () {
	return "hola desde routes";
});

Route::get('nombre/{nombre}', function ($nombre) {
	return "mi nombre es: ".$nombre;
});
Route::get('edad/{edad}', function ($edad) {
	return "mi edad es: ".$edad;
});


Route::get('edad2/{edad?}', function ($edad=20) {
	return "mi edad es: ".$edad;
});


Route::get('/', 'SimController@index');
Route::get('coyuntura/{NOMBRE?}', 'SimController@coyuntura');
Route::get('historico', 'SimController@historico');

route::get('variables', function ()
{
return "valor";
}

);

