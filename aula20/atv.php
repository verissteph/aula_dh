<?php 
//Gravei conteudo do GET na variavel $texto
$texto = $_GET['texto'];

//Abrindo o arquivo para escrita (modo 'a'):
$t= fopen('msg.txt','a');

// escrevendo o conteudo de $texto no arq representado por $t
fwrite($t, $texto);
//$t = file_get_contents("msg.txt"); - como nos armazenamos na aula, porém vamos ver por outra forma.

//fechamos o arquivo da seguinte forma:
fclose($t);

//retornando uma mensagem para o usuário
echo('Salvei as info');

//phpinfo();
?>