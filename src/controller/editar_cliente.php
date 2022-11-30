<?php

$id = $_GET['id'];

$sql_query = $mysqli->query("SELECT * FROM chamados WHERE id = '$id' ");

$lista = $sql_query->fetch_assoc();

if(isset($_POST['titulo']) || isset($_POST['categoria']) || isset($_POST['descricao'])) {

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $sql_query = $mysqli->query("UPDATE chamados SET titulo = '$titulo', categoria = '$categoria', descricao = '$descricao' WHERE id = '$id' ");

    header('Location: chamados.php');
}

?>