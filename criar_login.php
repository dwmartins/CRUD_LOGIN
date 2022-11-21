<?php
include('./src/controller/conexao.php');
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
        <a href="#">
            <h1>CRUD</h1>
        </a>
    </nav>

    <section class="criar_usuario">
        <form action="">
            <label for="">Nome</label>
            <input type="text">

            <label for="">E-mail</label>
            <input type="email">

            <label for="">Senha</label>
            <input type="password">

            <button type="submit">CRIAR USUÁRIO</button>
        </form>
    </section>
</body>
</html>