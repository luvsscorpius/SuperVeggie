<?php
 session_start();
?>

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

    $btnlogin = filter_input(INPUT_GET, 'btnlogin', FILTER_SANITIZE_STRING);
    if($btnlogin){
        $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_GET, 'password', FILTER_SANITIZE_STRING);
        echo "$email - $password";
    }else{
        $_SESSION['msg'] = "Página não encontrada";
        header("Location: login.php");
    }

    ?>
</body>
</html>