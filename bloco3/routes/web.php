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
    
    $dados['nome'] = 'Jão';
    return view('welcome', $dados);
});

Route::get('/minha-view', function () {

    return view('home');

});

Route::get('/bolo/{sabor}', function ($sabor) {
    switch($sabor){
        case 'laranja': return view('laranja'); break;
        case 'morango': return view('morango'); break;
        default: return view('not_found'); break;
    }
});

Route::get('/bolo', function () {
    return view('listar_sabores');
});
    
    
