<?php 
//1- Quem é o contador?
//2- Abriram a doc do php?
//3-Commo atibuir valor a sessao
//4-comece com session_start()
//5-preciso de um IF?
//6-onde esta o botão?
session_start(); //iniciando uma sessao                
$recebe = $_SESSION['contador']; // criando variavel p receber o que vem da session
 //verificar existencia do contador,caso nao exista  deve iniciar com zero
if(isset($recebe)){
    echo $recebe;
        } else{
        $recebe=0;
 }
?>