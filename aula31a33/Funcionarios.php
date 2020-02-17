<?php
abstract class Funcionario{
    public $nome;
    public $idade;
    private $salario;
    private $cargo;

  public function setSalario($hora,$valor){
    //   return $hora * $valor;
    $this -> salario = $hora * $valor;
    }  
}

?>