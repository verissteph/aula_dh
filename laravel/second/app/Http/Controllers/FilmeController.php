<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    function procurarFilmeId($id){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];
            return $filmes[$id];
    }
    function procurarFilmeNome($nome){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];

              foreach($filmes as $filme){
                  //echo $nome;
                if(strtolower($filme) == strtolower($nome)){
                    return $filme;
                }
            }
            return "Filme não encontrado!";
    }
    function produtos(){
       $produtos = $this->carregaProdutoBancoDeDados();
       return view("produto_lista",compact($produtos));
    }

    function carregaProdutoBancoDeDados() {
        return [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];
    }
    function listar(){
        return view('filmes.php',compact($filmes));
    }
}
