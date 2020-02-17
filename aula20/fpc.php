<?php
$texto = $_GET['texto'];
//file_put_contents("msg_fpc.txt",$texto);
//echo("Informação salva!");
$t = fopen('meuarquivo.txt');
fgets($t, $texto);
echo fgets($t);
fclose($t);
?>