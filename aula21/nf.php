<?php

$notasFiscais = [
    'nome'=> 'Henri santos',
    'cpf' => 12345678910,
    'endereco'=> ['logradouro'=>'Av são paulo','numero' => 65, 'cidade'=> 'são paulo' ],
    'lista'=> [
        ['prooduto'=> 'sabonete', 'quantidade'=> 6, 'valor'=> 50],
        ['prooduto'=> 'shampoo', 'quantidade'=> 1, 'valor'=> 40],
        ['prooduto'=> 'condicionador', 'quantidade'=> 2, 'valor'=> 60]
    ],
     'data'=>'17/01/2020',
    'CNPJ'=>12345678901,
    ];
 echo $notasFiscais['nome'], '<br>';
 echo $notasFiscais['endereco']['numero'],'<br>';
 echo $notasFiscais['endereco']['logradouro'], '<br>';

 echo $notasFiscais['lista'][1]['valor'],'<br>'; //Isso me retorna o valor do segundo produto da lista que é 40.
 echo $notasFiscais['lista'][2]['quantidade'],'<br>';


?>