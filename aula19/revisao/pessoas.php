<?php 
//$pessoas =[];

//$pessoas[] = [
//    'nome' => 'Ricardo',
//     'idade' =>'23',
//    'sexo' => 'Masculino'
// ];

// $pessoas[] = [
//     'nome' => 'Victor',
//     'idade' => '18',
//     'sexo' => 'Masculino'
// ];

// $pessoas[0] ['nacionalidade'] = 'Brasil';
// echo('<pre>');
// print_r($pessoas);
// echo('</pre>');

//Eu quero imprimir uma frase de apresentação
//para cada pessoa no meu array
// foreach($pessoas as $pessoa){
//     echo("Olá, meu nome é $pessoa[nome]. 
//     Minha idade é $pessoa[idade] anos.
//     Sou do sexo $pessoa[sexo] <br>");
//}
    //funçao que recebe 1 pessoa como parametro e imprima os dados dessa pessoa.
    //dica
    // function imprimeNome($nome){
    //     echo("Meu nome é $nome");
    // }
    // imprimeNome('Sérgio');

    // function imprimePessoas($nome, $idade, $sexo){
    //     echo("Eu sou $nome,
    //     tenho $idade anos e
    //     sou do sexo $sexo");
    // }
    // imprimePessoas('Roberta', 20, 'feminino');
//     function imprimePessoas($p){
       
//         echo("Eu sou $p[nome],
//         tenho $p[idade] anos e
//         sou do sexo $p[sexo]");
    
// }
//    imprimePessoas($pessoas[0]);

include('./includes/dadosDePessoas.php');
include('./includes/funcoes.php');

imprimePessoas($pessoas);
   ?> 