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

/**
	@routes METHOD: GET
*/
Route::get('/institucional', ['as'=>'site.institucional', 'uses'=>'Site\HomeController@paginaInstitucional']);
Route::get('/direito-trabalhista', ['as'=>'site.direitotrabalhista', 'uses'=>'Site\HomeController@paginaTrabalhista']);
Route::get('/direito-empresarial', ['as'=>'site.direitoempresarial', 'uses'=>'Site\HomeController@paginaEmpresarial']);
Route::get('/direito-das-sucessoes', ['as'=>'site.direitodassucessoes', 'uses'=>'Site\HomeController@paginaSucessao']);
Route::get('/direito-da-familia', ['as'=>'site.direitodafamilia', 'uses'=>'Site\HomeController@paginaFamilia']);
Route::get('/direito-imobiliario', ['as'=>'site.direitoimobiliario', 'uses'=>'Site\HomeController@paginaImobiliario']);
Route::get('/direito-do-consumidor', ['as'=>'site.direitodoconsumidor', 'uses'=>'Site\HomeController@paginaConsumidor']);
Route::get('/advogados', ['as'=>'site.advogados', 'uses'=>'Site\HomeController@paginaAdvogados']);
Route::get('/contato', ['as'=>'site.contato', 'uses'=>'Site\HomeController@paginaContato']);
Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@paginaPrincipal']);

/**
	@routes METHOD: POST
*/
Route::post('/enviaContato', ['as'=>'site.envia.contato', 'uses'=>'Site\ContatoController@enviaContato']);