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
</head>
<body>
    <h1>Bem vindo ao Painel, <?php echo $_SESSION['nome'];?></h1>

    <p>
        <a href="./src/controller/logout.php">Sair</a>
    </p>
</body>
</html>