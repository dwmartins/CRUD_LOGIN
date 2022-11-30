<?php
$sql_query = $mysqli->query("SELECT * FROM chamados ORDER BY id DESC");

$numero_cliente = $sql_query->num_rows;

?>