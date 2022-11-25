<?php
$sql_query = $mysqli->query("SELECT * FROM chamados ORDER BY titulo, categoria, descricao DESC");

$numero_cliente = $sql_query->num_rows;
?>