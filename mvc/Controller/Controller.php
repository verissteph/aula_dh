<?php
namespace Controller;
class Controller {
    protected function view($pagina) {
        require "./View/$pagina.php";
    }
}