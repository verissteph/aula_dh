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
    $dados = $_FILES;
    $d=$_POST['dado'];

echo('<pre>');
print_r($dados);
echo('</pre>');

$caminho=$_FILES['file']['tmp_name'];
$img_content=file_get_contents($caminho);
file_put_contents('avatar.jpg',$img_content);
?>

<img style="margin-top:50px; width:400px; height:300px;" src="./avatar.jpg" alt="">

</body>
</html>