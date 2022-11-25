<?php

    if(isset($_POST['titulo']) || isset($_POST['categoria']) || isset($_POST['descricao'])) {
        
        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];

        $sql_code = "INSERT INTO chamados (id, titulo, descricao, categoria, data) VALUES (0, '$titulo', '$categoria', '$descricao', now())";
        $sql_code = $mysqli->query($sql_code);

        header('Location: chamados.php');
    }

?>