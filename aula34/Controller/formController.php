<?php
    class FormController{

        function form(){
            require './View/form.php';
            }

        function home(){
            require './View/home.php';
        }

        function poost(){
            //salva dados no JSON ou BD e dps dessa logica direciona pra home
            // print_r($_GET);
            // die;
            header("location: /");
        }
        

}
?>