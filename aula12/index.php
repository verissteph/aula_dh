<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php
   echo("meu primeiro php");
  
   $nome = "Stéphanie";
   $idade = 23;
   $casado = true;

//    echo($nome);
//    echo($idade);
//    echo($casado);
   ?>
  <div>
      <div class="nome"> <?php  echo($nome); ?></div> 
      <!-- <?= $idade ?> é equivalente ao de cima e nao precisa de ; -->
      <div class="idade"> <?php  echo($idade);?></div>
  </div>
  <?php
  if($casado){
      echo("Não mexa com ele! Ele é casado!");
  }else{
          echo("Tá na pista!");
      }
  
  ?>
  <?= $casado ? "Não mexa com ele! Ele é casado!" : "Tá na pista!" ?>
</body>
</html>