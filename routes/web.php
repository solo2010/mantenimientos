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

Route::get('/', function(){

	return view('welcome');
})->name('principal');

Route::group(['prefix' => 'tecnico'], function(){

	Route::get('usuarios/crear', 'UsuarioController@create')->name('usuarios.crear');
	Route::get('usuarios/index', 'UsuarioController@index')->name('usuarios.index');
	Route::post('usuarios/store','UsuarioController@store')->name('usuarios.store');
	Route::get('usuarios/{id}/edit', 'UsuarioController@edit')->name('usuarios.edit');
	Route::put('usuarios/{id}/update', 'UsuarioController@update')->name('usuarios.update');
	Route::get('usuarios/{id}/destroy', 'UsuarioController@destroy')->name('usuarios.destroy');

});