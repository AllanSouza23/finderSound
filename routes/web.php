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

// Rotas -> menu
Route::get('/', 'GeneralController@verIndex')->name('_index_');
Route::get('/objetivos', 'GeneralController@verObjetivos')->name('_objetivos_');
Route::get('/cadastro', 'GeneralController@verFormulario')->name('_cadastro_');

// Create Estabelecimento
Route::post('/cadastro/local', 'GeneralController@criacaoLocal')->name('cadastrar_local');

// Create Artista
Route::post('/cadastro/artista', 'GeneralController@criacaoArtista')->name('cadastrar_artista');
