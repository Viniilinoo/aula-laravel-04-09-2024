<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;


//user
Route::get('/cadastro_usuario ', [UserController::class, 'formCriarUsuario']);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

Route::delete('/deletar_usuario/{id}', [UserController::class, 'deletar']);

Route::get('/editar_usuario/{id}', [UserController::class, 'formEditarUsuario']);

Route::patch('/editar_usuario/{id}', [UserController::class, 'editar']);



//produto
Route::get('/cadastro_produto', [ProdutoController::class, 'formCriarProduto']);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

Route::get('/listar_produto', [ProdutoController::class, 'listar']);

Route::delete('/deletar_produto/{id}', [ProdutoController::class, 'deletar']);

Route::get('/editar_produto/{id}', [ProdutoController::class, 'formEditarProduto']);

Route::patch('/editar_produto/{id}', [ProdutoController::class, 'editarProduto']);


//cliente
Route::get('/cadastro_cliente', [ClienteController::class, 'formCriarCliente']);

Route::post('/criar_cliente', [ClienteController::class, 'criar']);

Route::get('/listar_cliente', [ClienteController::class, 'listar']);

Route::delete('/deletar_cliente/{id}', [ClienteController::class, 'deletar']);

Route::get('/editar_cliente/{id}', [ClienteController::class, 'formEditarCliente']);

Route::patch('/editar_cliente/{id}', [ClienteController::class, 'editar']);


//vendedor
Route::get('/cadastro_vendedor', [VendedorController::class, 'formCriarVendedor']);

Route::post('/criar_vendedor', [VendedorController::class, 'criar']);

Route::get('/listar_vendedor', [VendedorController::class, 'listar']);

Route::delete('/deletar_vendedor/{id}', [VendedorController::class, 'deletar']);

Route::get('/editar_vendedor/{id}', [VendedorController::class, 'formEditarVendedor']);

Route::patch('/editar_vendedor/{id}', [VendedorController::class, 'editarVendedor']);


// App
Route::get('/', [AppController::class, 'iniciar']);