<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/', 'Principal\PrincipalController');
Route::resource('/contactanos', 'Principal\ContactanosController');
Route::resource('/planes', 'Principal\PlanesController');

Route::get('/login', function () {
    return view('layouts.principal');
})->name('main');

Auth::routes();

Route::group(['namespace' => 'administrador', 'middleware' => ['auth', 'acceso', 'web']], function() {
	Route::resource('/categoria', 'CategoriaController');
    Route::resource('/lamina', 'LaminaController');
    Route::resource('/usuario', 'UsuarioController');
    Route::resource('/plan', 'PlanController');
    Route::resource('/factura', 'FacturaController');
});

Route::group(['namespace' => 'usuario', 'middleware' => ['auth', 'acceso', 'web']], function() {
	Route::resource('/file', 'FileController');
});