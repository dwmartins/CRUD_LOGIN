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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/style.css">
    <script src="https://kit.fontawesome.com/b019fa643e.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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

        <div data-aos="zoom-in" class="chamados">
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
                            <span>
                                <h2><?php echo $lista['titulo']; ?></h2>
                                <p>
                                    <?php 
                                        $data = date("d/m/y", strtotime($lista['data']));

                                        echo $data;
                                    ?>
                                </p>
                            </span>

                            <hr>

                            <h3><?php echo $lista['categoria']; ?></h3>

                            <p><?php echo $lista['descricao']; ?></p>

                            <div class="btn_chamados_abertos">
                                <a class="btn_editar" href="./editar_chamado.php?id=<?= $lista['id']; ?>">Editar</a>

                                <button class="btn_finalizar">Finalizar</button>
                            </div>
                        </div>

                <?php } }?>
            </div>

            <a class="btn_voltar" href="painel.php">Voltar</a>
        </div>
    </section>

    
    
    
    <script src="./src/js/finlizar_chamado.js"></script>

    <script>
        AOS.init();
    </script>
</body>
</html>