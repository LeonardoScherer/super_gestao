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

Route::get('/', 'HomeController@home')->name('site.home');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobre-nos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', 'LoginController@login')->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', 'ClientesController@clientes')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produto', 'ProdutosController@produtos')->name('app.produtos');
});
