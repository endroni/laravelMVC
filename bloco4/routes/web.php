<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceitaController; // Usando o controller

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

Route::get('/bolo/{sabor}', [ReceitaController::class, 'receita']);

Route::get('/bolo', [ReceitaController::class,'listar']); 
    // A rota agora retorna uma lista com o controller 
    // e o método do controller é que chama a view.

