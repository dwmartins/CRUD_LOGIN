<?php

$sql_code = "SELECT * FROM chamados ORDER BY titulo, categoria, descricao DESC";
$sql_query = $mysqli->query($sql_code);

$numero_cliente = $sql_query->num_rows;
?>