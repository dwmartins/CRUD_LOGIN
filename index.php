<?php
include('./src/controller/conexao.php');
include('./src/controller/logar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    
    <nav class="nav_login">
        <a href="#">
            <h1>CRUD</h1>
        </a>
    </nav>

    <section class="login">
        <form action="" method="POST">
            <label for="">Login</label>
            <input type="email" name="email">

            <label for="">Senha</label>
            <input type="password" name="senha">

            <button>ENTRAR</button>

            <p>Não possui conta? <a href="criar_login.php">Criar nova conta</a></p>

        </form>
    </section>

</body>
</html>