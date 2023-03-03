<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $dbname = "superveggie";

     // criar conexao

     $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

     if($conn->error){
        die("Falha ao conectar o banco de dados:" .$conn->error);
     }

    ?>
</body>
</html>