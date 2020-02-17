<?php
require_once('conexao.php');

$consulta= $conexaoDB -> prepare('SELECT * from editora');
$resultado=$consulta ->execute();

$editoras= $consulta ->fetchAll(PDO::FETCH_ASSOC); // Aqui a variavel que vai fazer o fetchAll deve ser aquela que foi preparada!
// var_dump($editoras);

if(isset($_POST['cadastro-livro'])){
    //verifica campos preenchidos
    if($_POST['nome'] != "" && $_POST['descricao'] != ""){
        //prepara a query
        $query =$conexaoDB->prepare("INSERT INTO produto (nome, descricao, preco, fk_editora,fk_categoria,imagem) VALUES (:nome, :descricao, :preco, :fk_editora, 1, 'sem-imagem')");

        $resultado = $query->execute([
            ":nome" => $_POST['nome'],
            ":descricao" => $_POST['descricao'],
            ":preco" => $_POST['preco'],
            ":fk_editora" => $_POST['fk_editora']
        ]);
        
        // se tudo der certo, redireciona para a lista de livros
        header('location: livros.php');
        // var_dump($_POST);
        // var_dump($resultado);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST" class="container">
        <label for="nome">Nome Produto:</label>
    <input type="text" id="nome" name="nome" class="form-control">
        <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" id="descricao" class="form-control">
        <label for="preco">Preço:</label>
    <input type="number" name="preco" id="preco" class="form-control">
        <label for="imagem">Imagem:</label>
    <input type="file" name="imagem" id="imagem" class="form-control">
        <label for="fk_editora">Editora</label>
    <select name="fk_editora" id="fk_editora" class="form-control">
        <?php foreach ($editoras as $editora) { ?>
            <option value="<?php echo $editora["id_editora"]; ?>"> <?php echo $editora["nome"]; ?></option>
        <?php } ?>
    </select>
            <button type="submit" class="btn btn-primary" name="cadastro-livro">Enviar</button>
    </form>
</body>
</html>