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

// Update Artista
Route::get('/editar/artista/{id}', 'GeneralController@verArtista');
Route::post('/editar/artista/{id}', 'GeneralController@updateArtista')->name('alterar_dados_artista');

// Update Local
Route::get('/editar/local/{id}', 'GeneralController@verLocal');
Route::post('/editar/local/{id}', 'GeneralController@updateLocal')->name('alterar_dados_local');

// Delete Artista
Route::get('/excluir/artista/{id}', 'GeneralController@deleteArtista');
Route::post('/excluir/artista/{id}', 'GeneralController@destroyArtista')->name('excluir_dados_artista');

// Delete Local
Route::get('/excluir/local/{id}', 'GeneralController@deleteLocal');
Route::post('/excluir/local/{id}', 'GeneralController@destroyLocal')->name('excluir_dados_local');
