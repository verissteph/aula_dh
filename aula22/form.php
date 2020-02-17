<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário Upload</title>
   </head>
<body>
    <form action="form_post.php" method="post" enctype="multipart/form-data">
        <p>Digite o dado:</p>
        <input type="text" name="dado">
        <br><br>
        <input type="submit">
        <input type="file" name="file">
     </form>
     

  
</body>
</html>