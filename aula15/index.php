<!-- // while -->
<?php
// $quantidade =5;
//while($quantidade > 0){
//echo $quantidade;
//$quantidade -- ;
//}
//  SE EU FIZER MAIS UM ECHO? IrÁ APARECER O 0, ou seja, nao ira respeitar a regra.
//echo($quantidade);



// FOR percorre arrays
echo('<br><br> FOR:<br>');
// Imprimindo numeros de 1 a 20;
for($i=1; $i<=20; $i++){
//echo $i, ', '; Uma instrução só o par de chaves nao é necessario
echo ($i==20 ? $i:"$i, ");
}

 echo('<br><br> FOR com array: <br>');

 $frutas = ['Goiaba','Jaca','Maça'];
 $busca = 'Jaca';
 for($i=0; $i < count($frutas); $i++) {
    //imprimir a fruta da vez 'i'
    //echo (" $frutas[$i] ");
    //Perguntando se é a fruta busca
    if($frutas[$i] == $busca){
        echo("Achei a fruta $busca<br>");
        break;
    } else {
        echo("vamos para a proxima..<br>");
    }
    }
 
//count($array) - vai contar o tamanho do array!
//echo (" $frutas[$i] "); - vai introduzir espaços;

//FOREACH

$nomes = ['Leticia', 'Stephanie','Francisco'];
foreach($nomes as $nome){
    echo $nome, " ";
}
//$n vai ser o elemento da vez
// as é o mesmo 'como' 
//foreach($nomes as $nome) cada elemento do array $nomes será atribuido como $nome

echo('<br><br> FOREACH ARRAY ASSOCIATIVO: <br>');
$cachorro = [
    'nome'=>'Vintém',
    'idade'=> 10,
    'sexo'=> 'M'
];
foreach($cachorro as $campo =>$X){
    echo "$campo: $X <br>";
}