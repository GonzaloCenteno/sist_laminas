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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['namespace' => 'administrador'], function() {
	Route::resource('/categoria', 'CategoriaController');
    Route::resource('/lamina', 'LaminaController');
    Route::resource('/usuario', 'UsuarioController');
});

Route::group(['namespace' => 'usuario'], function() {
	Route::resource('/file', 'FileController');
});