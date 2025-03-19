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
    return view('welcome');
});

//Rotas do contato
Route::get('/contato','App\Http\Controllers\ContatoController@index');
Route::post('/contato','App\Http\Controllers\ContatoController@store');

//Rota da Categoria
Route::get('/Categoria','App\Http\Controllers\CategoriaController@index');

//rota do Produto
Route::get('/produtos','App\Http\Controllers\ProdutoController@index');
Route::post('/produtos','App\Http\Controllers\ProdutoController@store');

//rota do Fornecedor
Route::get('/fornecedor','App\Http\Controllers\FornecedorController@index');
Route::post('/fornecedor','App\Http\Controllers\FornecedorController@store');
Route::get('/fornecedor', 'App\Http\Controllers\FornecedorController@index');