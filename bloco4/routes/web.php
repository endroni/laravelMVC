<?php

use Illuminate\Support\Facades\Route;

// declaração do controller
use App\Http\Controllers\ReceitaController; 

// rota deve apontar para o controller
Route::get('/bolo/', [ReceitaController::class, 'listar']);
Route::get('/bolo/{sabor}', [ReceitaController::class, 'receita']);
