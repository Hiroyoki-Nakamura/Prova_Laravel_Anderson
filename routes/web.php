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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

//Tabelao
Route::get('/tabeliao', 'TabeliaoController@index')->name('tabeliao');
Route::get('/registros/tabeliao/adicionar', 'TabeliaoController@adicionar')->name('adicionar');
Route::post('/registros/tabeliao/salvar', 'TabeliaoController@salvar')->name('salvar');
Route::get('/registros/tabeliao/editar/{id}', 'TabeliaoController@editar')->name('editar');
Route::put('/registros/tabeliao/atualizar/{id}', 'TabeliaoController@atualizar')->name('atualizar');
Route::delete('/registros/tabeliao/deletar/{id}', 'TabeliaoController@deletar')->name('deletar');

//Contrato
Route::get('/contrato', 'ContratoController@index')->name('contrato');
Route::get('/registros/contrato/adicionar', 'ContratoController@adicionar')->name('adicionar');
Route::post('/registros/contrato/salvar', 'ContratoController@salvar')->name('salvar');
Route::get('/registros/contrato/editar/{id}', 'ContratoController@editar')->name('editar');
Route::put('/registros/contrato/atualizar/{id}', 'ContratoController@atualizar')->name('atualizar');
Route::delete('/registros/contrato/deletar/{id}', 'ContratoController@deletar')->name('deletar');

//Certidao
Route::get('/certidao', 'CertidaoController@index')->name('certidao');
Route::get('/registros/certidao/adicionar', 'CertidaoController@adicionar')->name('adicionar');
Route::post('/registros/certidao/salvar', 'CertidaoController@salvar')->name('salvar');
Route::get('/registros/certidao/editar/{id}', 'CertidaoController@editar')->name('editar');
Route::put('/registros/certidao/atualizar/{id}', 'CertidaoController@atualizar')->name('atualizar');
Route::delete('/registros/certidao/deletar/{id}', 'CertidaoController@deletar')->name('deletar');


