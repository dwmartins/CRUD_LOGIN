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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/style.css">
    <script src="https://kit.fontawesome.com/b019fa643e.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
</head>
<body>
    
    <nav class="nav_login">
        <a href="index.php">
            <h1>CRUD</h1>
        </a>
    </nav>

    

    <section class="criar_usuario">
        <?php
            if(isset($_SESSION['alert'])) : ?>
            
            <div data-aos="zoom-in" class="<?php echo $_SESSION['alert']['style']; ?>">
            <i class="<?php echo $_SESSION['alert']['icon'] ?>"></i> <?php echo $_SESSION['alert']['mensagem']; ?>
            </div>

            <?php
                unset($_SESSION['alert']['mensagem']);
                unset($_SESSION['alert']['style']);
            endif ; 
        ?>

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


    <script>
        AOS.init();
    </script>
</body>
</html>