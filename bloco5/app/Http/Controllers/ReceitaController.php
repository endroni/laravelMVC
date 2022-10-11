<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receitas; #Importando a Model Receitas

# CRUD - READ
class ReceitaController extends Controller
{
    // Listar todas as receitas
    public function listar(){
        // Retornar as receitas

        $dados['sabores'] = Receitas::all();

        return view('listar_sabores', $dados);
    }

    // Carregando detalhes da receita
    public function receita($id){
        // Recuperando dados do banco
        $dados['sabor'] = Receitas::findOrFail($id);

        return view('receita', $dados);
    } 

    // deletando dados
    public function deletar($id){
        if(is_numeric($id)){
            Receitas::findOrFail($id)->delete();
            return redirect('/bolo');
        }
        else{
            return redirect('/bolo');
        }
    }


    // inserindo dados
    public function inserir(){
        $receitas = new Receitas;

        $receitas->titulo = "Bolo de Pera";

        $receitas->ingredientes = "2 ovos
        1 xícara de leite
        1 massa pronta para bolo sabor Pera
        2 pacotes de leite condensado
        chocolate em pó a gosto";

        $receitas->modo_preparo = "Pré-aqueça o forno a 180°C por 5 min.
        Misture os 2 ovos com o leite e a massa para bolos e coloque em uma forma.
        Leve para o forno e deixe assar por 30 a 45 minutos.
        Misture o leite condensado com o chocolate e leve ao forno por alguns minutos para fazer a cobertura.
        Retire o bolo do forno e coloque a cobertura. Deguste!";

        $receitas->save();

        echo 'Receita inserida com sucesso';

    }
}
