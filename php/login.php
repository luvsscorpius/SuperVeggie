<?php
 include('conexao.php');

 if(isset($_GET['email']) || isset($_GET['password'])){

    if(strlen($_GET['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_GET['password']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $conn->real_escape_string($_GET['email']);
        $password = $conn->real_escape_string($_GET['password']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código sql: " .$conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperVeggie - Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/log.css">
</head>
<body>
    <nav><img src="../img/SuperVeggieLogo.png" alt="" id="menu_horizontal"></nav>
    <div class="box-login">

        <h1 class="title_login">Login</h1>
    
        <form method="get" action=" " class="form login">

            <div class="form_field">
            
                <label for="login__username">
                    <span class="hidden">E-mail</span>
                </label>
                
                <input autocomplete="off" id="login_username" type="text" name="email" class="form_input" placeholder="E-mail" >

            </div>

            <div class="form_field">
            
                <label for="login_password">
                    <span class="hidden">Senha</span>
                </label>
            
                <input id="login_password" type="password" name="password" class="form_input" placeholder="Password" >
          
            </div>

            <div class="form_field">
                <input type="submit" value="Entrar">
            </div>

        </form>

        <p class="resgatar-senha">
            <a href="#">Resgatar senha </a> 
        
        </p>

    </div><!--Box Login-->

       
</form>
</body>
</html>