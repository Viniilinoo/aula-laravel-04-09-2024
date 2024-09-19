<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;


//user
Route::get('/cadastro_usuario', [UserController::class, 'formCriarUsuario']);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);



//produto
Route::get('/cadastro_produto', [ProdutoController::class, 'formCriarProduto']);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

Route::get('/listar_produto', [ProdutoController::class, 'listar']);


//cliente
Route::get('/cadastro_cliente', [ClienteController::class, 'formCriarCliente']);

Route::post('/criar_cliente', [ClienteController::class, 'criar']);

Route::get('/listar_cliente', [ClienteController::class, 'listar']);


//vendedor
Route::get('/cadastro_vendedor', [VendedorController::class, 'formCriarVendedor']);

Route::post('/criar_vendedor', [VendedorController::class, 'criar']);

Route::get('/listar_vendedor', [VendedorController::class, 'listar']);