<?php
class Atentende extends Funcionarios {
    public $conhecimento;

    //Da erro, o PHP não deixa usar funções na declaração de propriedades public $cargo = strlower(atendente)

    private $cargo = "Atendente";
    public function atender(){


    }
    public function setSalario($hora,$valor){
        

    }
}
?>