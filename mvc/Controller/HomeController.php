<?php
namespace Controller;
//require_once "./Controller/Controller.php";//nao vamos mais utilizar, qm ira chamar sera o namespace

class HomeController extends Controller {
    function home() {
        $this->view('home');
    }
}