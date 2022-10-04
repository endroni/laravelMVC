<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    // Listando as receitas
    public function listar(){   
        return view('listar_sabores');  // É essa função que retorna a view
    }  
    
    // Carregando receitas
    public function receita($sabor){

        // Carrega todas as views das receitas

        switch($sabor){
            case 'laranja': return view('laranja');break;
            case 'morango': return view('morango');break;
            default: return view('not_found'); break;
        }
    }
}
