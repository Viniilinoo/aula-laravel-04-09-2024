<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MontadoraController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;


//user
Route::get('/cadastro_usuario ', [UserController::class, 'formCriarUsuario']);

Route::get('/listar_usuarios', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);

Route::delete('/deletar_usuario/{id}', [UserController::class, 'deletar']);

Route::get('/editar_usuario/{id}', [UserController::class, 'formEditarUsuario']);

Route::patch('/editar_usuario/{id}', [UserController::class, 'editar']);



//montadora
Route::get('/cadastro_montadora', [MontadoraController::class, 'formCriarMontadora']);

Route::get('/criar_montadora', [MontadoraController::class, 'criar']);

Route::get('/listar_montadora', [MontadoraController::class, 'listar']);

Route::delete('/deletar_montadora/{id}', [MontadoraController::class, 'deletar']);

Route::get('/editar_montadora/{id}', [MontadoraController::class, 'formEditarMontadora']);

Route::patch('/editar_montadora/{id}', [MontadoraController::class, 'editarMontadora']);


// App
Route::get('/', [AppController::class, 'iniciar']);