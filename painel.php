<?php
include "./src/controller/protege_pagina.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>

    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>

    <nav class="nav_login">
        <a href="painel.php">
            <h1>CRUD</h1>
        </a>

        <a href="./src/controller/logout.php">Sair</a>
    </nav>

    <h1>Bem vindo ao Painel, <?php echo $_SESSION['nome'];?></h1>

</body>
</html>