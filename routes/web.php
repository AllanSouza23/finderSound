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

/*-------------------------ARTISTA--------------------- */
// Create Artista
Route::post('/cadastro/artista', 'ArtistaController@createArtista')->name('cadastrar_artista');

// Update Artista
Route::get('/editar/artista/{id}', 'ArtistaController@show');
Route::post('/editar/artista/{id}', 'ArtistaController@updateArtista')->name('alterar_dados_artista');

// Delete Artista
Route::get('/excluir/artista/{id}', 'ArtistaController@deleteArtista');
Route::post('/excluir/artista/{id}', 'ArtistaController@destroy')->name('excluir_dados_artista');

/*--------------------------LOCAL---------------------------- */
// Create Local
Route::post('/cadastro/local', 'EstabelecimentoController@createLocal')->name('cadastrar_local');

// Update Local
Route::get('/editar/local/{id}', 'EstabelecimentoController@show');
Route::post('/editar/local/{id}', 'EstabelecimentoController@updateLocal')->name('alterar_dados_local');

// Delete Local
Route::get('/excluir/local/{id}', 'EstabelecimentoController@deleteLocal');
Route::post('/excluir/local/{id}', 'EstabelecimentoController@destroy')->name('excluir_dados_local');
