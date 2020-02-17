<?php

require_once ('conexao.php');

$consultaDB = $conexaoDB->prepare('SELECT * from produto');
$consulta = $consultaDB->execute();

// echo("<pre>");
// var_dump($consulta);
// echo("</pre>");

$livros = $consultaDB->fetchAll(PDO::FETCH_ASSOC);

// echo("<pre>");
// var_dump($livros);
// echo("</pre>");
// foreach($livros as $livro){
//     echo("<pre>");
//     // var_dump($livro);
//     echo $livro["id_produto"]."<br>".$livro["descricao"]."<br>".$livro["preco"]."<hr>";
//     echo("</pre>");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Livraria</title>
</head>

<body>
<div class="container my-5">
    <div class="row">
      <div class="col">
        <h1>Livraria</h1>
      </div>
      <div class="col text-right">
        <a href="cadastroLivro.php"class="btn btn-primary">Cadastrar livro</a>
      </div>
    </div>
  </div>
<table class="table container">
    <thead>
         <tr>
           <th>Nome</th>
            <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Editora</th>
                <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($livros as $livro) :?>
                <tr>
                    <td><?php echo $livro['nome']?></td> 
                    <td><?php echo $livro['descricao']?></td> 
                    <td><?php echo $livro['preco']?></td> 
                    <td><?php echo $livro['fk_categoria']?></td> 
                    <td><?php echo $livro['fk_editora']?></td> 
                    <td>
                    <a href="editarLivro.php?id=<?php echo $livro['id_produto']?>">Editar</a> 
                    <!-- O que vai aparecer na URL é o nome ID e esse era o erro que estava dando ao conectar com o banco de dados -->
                    <a href="excluirLivro.php?id=<?php echo $livro['id_produto']?>">Excluir</a>
                    </td>
                </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>