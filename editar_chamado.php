<?php
include('./src/controller/conexao.php');
include "./src/controller/protege_pagina.php";
include "./src/controller/exibir_chamados.php";
include "./src/controller/editar_chamado.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar chamado</title>

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

    <section class="abrir_chamado">

        <div class="open_achamado">
            <div class="titulo_abir">
                <p>Editar chamado</p>
            </div>
        
            <form action="" method="POST" class="form_abertura">
                <label for="">Titulo</label>
                <input type="text" name="titulo" id="titulo" value="<?= $lista['titulo']; ?>">

                <label for="">Categoria</label>
                    <select name="categoria" id="categoria">
                        <option value="<?= $lista['categoria'] ?>"></option>
                        <option value="internet">Internet</option>
                        <option value="login">Login</option>
                        <option value="hardware">Hardware</option>
                        <option value="outros">Outros</option>
                    </select>

                <label for="">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="5"><?= $lista['descricao'] ?></textarea>

                <div class="botoes_abertura">
                    <a href="./chamados.php">Voltar</a>
                    <button type="submit">Atualizar</button>
                </div>
            </form>
    
        </div>
    </section>

    <script src="./src/js/atualiza_chamado.js"></script>

    <script>
        AOS.init();
    </script>

</body>
</html>