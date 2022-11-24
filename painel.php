<?php
include "./src/controller/protege_pagina.php";
include('./src/controller/logar.php');
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

        <div>
            <p>Bem vindo: <?php echo $_SESSION['nome'];?></p>
            <a href="./src/controller/logout.php">Sair</a>
        </div>
    </nav>

    <section class="painel">
        <div class='menu'>
            <h4>Menu</h4>

            <div>
                <a href="#">
                    <img src="./src/img/abrir_chamado.png" alt="Abrir chamado">
                </a>

                <a href="chamados.php">
                    <img src="./src/img/consultar_chamado.png" alt="Consultar chamado">
                </a>
            </div>
        </div>
    </section>

</body>
</html>