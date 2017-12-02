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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UsuariosController@index');
Route::get('/users/create', 'UsuariosController@criarUsuario');
Route::post('/users/create', 'UsuariosController@criaUsuario');

Route::get('/users/update/{id}', 'UsuariosController@atualizarUsuario');
Route::post('/users/update', 'UsuariosController@atualizaUsuario');

Route::get('/users/delete/{id}', 'UsuariosController@deletarUsuario');

Route::get('/produto', 'ProdutoController@listarProduto');
Route::get('/produto/criar', 'ProdutoController@criarProduto');
Route::get('/produto/update/{id}', 'ProdutoController@atualizarProduto');
Route::get('/produto/delete/{id}', 'ProdutoController@deletarProduto');
Route::get('/produto/comprar', 'ProdutoController@getComprar');
Route::post('/produto/comprar', 'ProdutoController@postComprar');

Route::post('/produto/criar', 'ProdutoController@criaProduto');
Route::post('/produto/update/', 'ProdutoController@atualizaProduto');


Route::get('/pedidos', 'PedidoController@listarPedidos');
