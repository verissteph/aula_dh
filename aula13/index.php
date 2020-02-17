<?php
// Definir seu array associativo $pessoas;
$pessoas =[
[
    "nome" => "Elizabet Verissimo",
    "idade" => 48,
    "feminino" => true,
],
[
    "nome" => "Gabrinne Oliveira",
    "idade" => 20,
    "feminino" => true,
],
[
    "nome" => "Ricardo Narciso",
    "idade" => 27,
    "feminino" => false,
]
];
$pos=0;
$pessoa = $pessoas[$pos];

// echo('<pre>');
// // var_dump($pessoas); 
// // var_dump: ele explode na tela todas as info que vc fez, todo o conteudo e estrutura.
// print_r($pessoa);
// // mostra apenas os valores, sem definir o tipo do valor. (true =1 false = n imprime nada)
// echo('<pre>');
// // <pre> organiza as informações explodidas na ela
// die();
// ?>

<!-- // Definir seu array associativo $pessoa1;
$pessoa1 = [
    "nome" => "Elizabet Verissimo",
    "idade" => 48,
    "feminino" => true,
];
?> -->
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
       <link rel="stylesheet" href="./css/style.css">
   </head>
   <body>
       <div class="pessoa">
            <img src="./img/mulher.jpg" alt="<?=pessoa['nome']; ?>">
            <div class="dados">
                <div class="info">
                    <span>Nome:</span>
                    <div>Stéphanie Veríssimo</div>
                </div>
                <div class="info">
                    <span>Idade:</span>
                    <div> <?= pessoa['idade']; ?> </div>
                </div>
                <div class="info">
                    <span>Sexo:</span>
                    <div><?= pessoa['feminino'] ? 'Feminino' : 'Masculino' ?></div>
                </div>    
            </div>
            
        </div>
    </body>
</html>
