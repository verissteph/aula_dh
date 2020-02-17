<?php

$dsn = "mysql:host=localhost;dbname=livraria;port=3307"; // tipo de banco de dados, onde ela está, o nome do banco e a porta que se vê no mysqlbranches
$username = "root";
$password="";

try {
$conexaoDB = new PDO($dsn,$username,$password);    //vai tentar conectar banco de dados com o php, para isso atribuimos uma variavel
// echo"<h1>Deu certo, meu irmao!</h1>";
} catch(PDOExpection $e){ //pega a exceção, funciona como if else
echo "<h1> Nessa máquina não funciona! </h1><br>".$e->getMessage(); //$e->getMessage vai puxar e mostrar o erro 
}

?>
