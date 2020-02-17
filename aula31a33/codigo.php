<?php
$obj = new Atendente ();
$obj -> nome = "Gustavo";
$obj -> idade = 30;
$obj -> cargo = "";
$obj -> conhecimento = true;
$obj -> setSalario(160,10);

//Da erro, a variavel é privada;
//$obj-> cargo = " ";
?>