<?php
//Capturando infos do $_GET
    $numero = $_GET['numero'];
    $cep = $_GET['cep'];

    //Levantar as info da localidade
    //a partir do CEP
    $str=file_get_contents("http://viacep.com.br/ws/$cep/json/");

    //Transformando a string json em um array associativo
   $endereco = json_decode($str,true);

   // Adicionando numero ao endereço 
   $endereco['numero'] = $numero;

 //Transformar o array associativo $endereco de volta para string
   $str=json_encode($endereco);
   echo("<pre>");
   echo($str);
   echo("</pre>");
   
   //Salvar as info num arqv
   file_put_contents('endereco.json', $str);

//    echo("<pre>");
//    print_r($endereco);
//    echo("</pre>");
    
    // echo("<pre>");
    // echo $str;
    // echo("</pre>");
    ?>