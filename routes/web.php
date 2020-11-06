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



Route::get('/livros', 'App\Http\Controllers\LivrosController@index')->name('livros.index');

Route::get('/autor', 'App\Http\Controllers\AutoresController@index')->name('autores.index');

Route::get('/editora', 'App\Http\Controllers\EditoraController@index')->name('editoras.index');

Route::get('/genero', 'App\Http\Controllers\generoController@index')->name('genero.index');

Route::get('/livros/{id}/show', 'App\Http\Controllers\LivrosController@show')->name('livros.show');

Route::get('/genero/{id}/show', 'App\Http\Controllers\generoController@show')->name('genero.show');

Route::get('/autor/{id}/show', 'App\Http\Controllers\AutoresController@show')->name('autor.show');

Route::get('/editora/{id}/show', 'App\Http\Controllers\EditoraController@show')->name('editoras.show');