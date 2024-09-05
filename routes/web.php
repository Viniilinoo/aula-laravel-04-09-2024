<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_usuario', [UserController::class, 'formCriarUsuario']);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

Route::get('/listar_produto', [ProdutoController::class, 'listar']);