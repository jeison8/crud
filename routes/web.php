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

Auth::routes();

Route::get('/', function(){
    return redirect('usuarios');
});


Route::get('usuarios','UsuarioController@index')->name('usuarios.index');
Route::get('usuarios/crear','UsuarioController@create')->name('usuarios.create');
Route::post('usuarios','UsuarioController@store')->name('usuarios.store');
Route::get('usuarios/{usuario}/editar','UsuarioController@edit')->name('usuarios.edit');
Route::patch('usuarios/{usuario}','UsuarioController@update')->name('usuarios.update');
Route::get('usuarios-delete/{usuario}','UsuarioController@destroy')->name('usuarios.destroy');
