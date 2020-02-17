<?php
//definiindo constante 
define('TAMANHO_MIN_NOME',8);
define('TAMANHO_MAX_NOME',40);
define('TAMANHO_CPF',11);

function nomeOK(string $nome):bool{
    return (strlen($nome) >= TAMANHO_MIN_NOME && strlen($nome)<= TAMANHO_MAX_NOME);
}

// function cpfOK(int $cpf):bool{
//     return strlen($cpf) == TAMANHO_CPF;

// function emailfOK(string $email):bool{
//     return strstr( string @)
// }
// }
?>