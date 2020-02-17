<?php 
$listaDePets = [
    'tipo'=>['cachorro', 'gato'],
    'porte'=> ['pequeno','medio','grande'],
    'raca'=> ['indefinida','definida'],
    'idade'=>['filhote','adulto','idoso']
];
// echo('<pre>');
// print_r($listaDePets);
// echo('</pre>');

$json_obj = json_encode($listaDePets);
echo($json_obj);
?>