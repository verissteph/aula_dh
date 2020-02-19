<?php
//Ele é a porta de entrada do cliente no sistema. ELE É RESPONSAVEL PELA ROTA. qnd n digitar nada o URI vem dos do nome do site! Qnd nao tiver nada, ele direciona para a home e por consequencia ele precisa entrar no controller p decidir o que vai mostrar a view
require 'Controller/formController.php';
// echo $_SERVER['REQUEST_URI']; die;
// echo "Eu quero ser um MVC";



// if($_SERVER['REQUEST_URI'] === '/stephanie/aula34/formulario'){
//     $obj = new FormController();
//     $obj -> form();
//     // $obj -> home();
// } else if($_SERVER['REQUEST_URI'] === '/'){
//     $obj = new FormController();
//     $obj -> home();

// } else{
//     echo '404 - Não Encontrado';
// }

switch($_SERVER['REQUEST_URI']){
    case "/stephanie/aula34/formulario":
        $obj = new FormController();
        $obj -> form();
    break;
    case "/":
        $obj = new FormController();
        $obj -> home();   
     break;
    case "/post":
        $obj = new FormController();
        $obj -> post(); 
    default:
        echo '404 - Não Encontrado';

}
?>