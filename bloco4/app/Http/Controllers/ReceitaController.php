<?php
   
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

class ReceitaController extends Controller{

    public function listar(){
  	    /* 
   	    *  Carrega a view que lista 
     	*  todas as receitas do site 
     	*/

        return view('listar_sabores');

    }

    public function receita($sabor){
        /* 
        *  Carrega a view que lista 
        *  todas as receitas do site 
        */
        switch($sabor){
            case 'laranja': return view('laranja'); break;
            case 'morango': return view('morango'); break;
            default: return view('listar_sabores'); break;
        }

    }
}
