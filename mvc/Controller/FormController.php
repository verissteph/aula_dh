<?php
namespace Controller;
//require_once "./Controller/Controller.php";

class FormController extends Controller {

    function form() {
        $this->view('form');
    }

    function post() {
        // Salva dados no JSON
        // Ou salva no Banco
        header("location: /");
    }
}