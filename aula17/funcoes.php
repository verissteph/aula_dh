<?php 
//Exemplo 01
function concatena($arg1, $arg2){
return $arg1 . $arg2;
}

concatena('Débora' , 'Bastos');
//echo concatena('Débora', 'Bastos');

//Exemplo 02
function somar(int $num1,int $num2):int{
    return $num1 + $num2;
}
//echo somar (12,132);

//Exemplo 03 - constante
define('PI', 3.1415);
function areaDoCirculo($raio){
    return$raio*$raio*PI;
}
echo(areaDoCirculo(10));
?>