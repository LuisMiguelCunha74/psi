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