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

      include_once("conexao.php");

      $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);
      $sobrenome = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
      $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
      $senha = filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_STRING);
      $confirmarsenha = filter_input(INPUT_GET, 'confirmarsenha', FILTER_SANITIZE_STRING);
      $tel = filter_input(INPUT_GET, 'tel', FILTER_SANITIZE_STRING);
      $nasc = filter_input(INPUT_GET, 'nasc', FILTER_SANITIZE_STRING);

      //echo "confirmar: $confirmarsenha";

      $result_usuario  = "INSERT INTO usuarios (nome, sobrenome, email, senha, confirmarsenha, tel, nasc, created) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$confirmarsenha', '$tel', '$nasc', NOW())";
      $resultado_usuario  = mysqli_query($conn, $result_usuario);

      if(mysqli_insert_id($conn)){
        header("Location: login.php");
      }else {
        header("Location: login.php");
      }
    ?>
</body>
</html>