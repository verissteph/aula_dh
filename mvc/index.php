<?php 

require "autoload.php";

//use Controller\FormController;
// use Controller\HomeController;

//Foi adicionado essa linha
// echo  $_SERVER['REQUEST_URI'];die;
$path = str_replace('/mvc', '', $_SERVER['REQUEST_URI']);
// echo  $path;die;
//Subistittui o $_SERVER['REQUEST_URI'] pela variável $path
switch($path) {
    case "/formulario":
        $obj = new FormController();
        $obj->form();
    break;
    case "":
    case "/":
        $obj = new HomeController();
        $obj->home();
    break;
    case "/post":
        $obj = new FormController();
        $obj->post();
    default:
        echo "404 - Não encontrado";
}
