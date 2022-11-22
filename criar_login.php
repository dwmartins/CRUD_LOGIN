<?php
include('./src/controller/conexao.php');
include('./src/controller/criar_usuario.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar login</title>

    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    
    <nav class="nav_login">
        <a href="index.php">
            <h1>CRUD</h1>
        </a>
    </nav>

    <section class="criar_usuario">
        <form action="" method="POST">
            <label for="" >Nome</label>
            <input type="text" name="nome">

            <label for="">E-mail</label>
            <input type="email" name="email">

            <label for="">Senha</label>
            <input type="password" name="senha">

            <button>CRIAR USUÁRIO</button>

            <p>Já possui conta? <a href="index.php">Entrar.</a></p>
        </form>
    </section>
</body>
</html>