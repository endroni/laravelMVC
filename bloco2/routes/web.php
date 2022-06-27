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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/teste', function() {
    return "<b>Isto é um <i>itálico</i></br>";
});
                                                                    //Expressão regular
Route::get('/teste/{id}', fn($id) => "Teste $id" ) ->where ('id', '[0-9]{1,8}'); 

Route::domain('{sub}.localhost')->group(
    function(){
        Route::get('/idioma/{id}', function($sub, $id){
            if($sub == 'en'){
                return "Hello world $id";
            }
            else {
                return "Olá mundo $id";
            }
        });

        Route::get('/outra-rota', fn()=>"Outra rota");
    }
);
