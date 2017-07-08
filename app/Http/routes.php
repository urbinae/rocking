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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('dashboard');
});

//Gestión de carros
Route::resource('carros', 'CarroGolfController', ['except' => ['show']]);
Route::resource('/carros/reserva', 'ReservaCarrosController', ['except' => ['show']]);

//Gestión de tours
Route::resource('tours', 'ToursController', ['except' => ['show']]);
Route::resource('tours/reserva', 'ReservaToursController', ['except' => ['show']]);
//Route::get('reservar-tour', 'ReservaToursController@reservar');

//Venta de fotos
Route::resource('fotos', 'VentaFotosController', ['except' => ['show']]);
Route::get('venta-fotos', 'VentaFotosController@venta');