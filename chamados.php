<?php
include "./src/controller/conexao.php";
include "./src/controller/protege_pagina.php";
include "./src/controller/logar.php";
include "./src/controller/exibir_chamados.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamdos</title>

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
    
    <section class="chamados_abertos">
        <div class="chamados">
            <h4>Consultar chamado</h4>

            <div class="lista_chamados">

                <?php 
                    if($numero_cliente == 0)  { ?>
                    
                    <div class="nenhum_resultado">
                        <p>Nenhum chamado em aberto!</p>
                    </div>

                <?php } else { 
                    
                    foreach ($sql_query as $lista) { ?> 
                        
                        <div>
                            <h2><?php echo $lista['titulo'] ?></h2>

                            <h3><?php echo $lista['categoria'] ?></h3>

                            <p><?php echo $lista['descricao'] ?>!</p>
                        </div>

                <?php } }?>

                <!-- <div>
                    <h2>Wi-fi</h2>

                    <h3>Internet</h3>

                    <p>Wi-fi não está funcionando!</p>
                </div> -->
            </div>

            <a class="btn_voltar" href="painel.php">Voltar</a>
        </div>
    </section>

</body>
</html>