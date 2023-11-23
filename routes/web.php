<?php

use App\Http\Controllers\ExtratoController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VaquinhaController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('/vaquinha', VaquinhaController::class);
Route::resource('/usuarios', UsuariosController::class);
Route::resource('/extrato', ExtratoController::class);

//

Route::get('/usercow', [UsuariosController::class, 'exibe_user_vaquinha']);
Route::post('/usercow', [UsuariosController::class, 'cria_user_vaquinha']);
Route::put('/usercow/{id}', [UsuariosController::class, 'atualiza_user_vaquinha']);
Route::delete('/usercow/{id}', [UsuariosController::class, 'destroy_user_vaquinha']);

Route::get('/mostrarVaquinhas', [UsuariosController::class,'mostraVaquinhasDoUsuario']);
Route::get('/mostrarVaquinhas/{id}', [UsuariosController::class,'mostrarUmaVaquinha']);



