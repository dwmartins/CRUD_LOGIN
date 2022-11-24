<?php

if(isset($_POST['email']) || isset($_POST['senha'])) {
    
    $nome = $mysqli->real_escape_string($_POST ['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' ";
    $sql_query = $mysqli->query($sql_code);

    $quantidade = $sql_query->num_rows;
    
    if($quantidade == 1) {
    
        $_SESSION['alert'] = $alert = [];
        $alert = [
                    'mensagem' => 'Este e-mail já está em uso.',
                    'style' => 'alert-danger ',
                    'icon' => 'fa-solid fa-triangle-exclamation'
                ];

        $_SESSION['alert'] = $alert;

    } else {
        $sql_code = "INSERT INTO usuarios (id, nome, email, senha) VALUES (0, '$nome', '$email', '$senha')";
        $sql_query = $mysqli->query($sql_code);

        $_SESSION['alert'] = $alert = [];
        $alert = [
                    'mensagem' => 'Usuário cadastrado com sucesso!',
                    'style' => 'alert-cadastrado',
                    'icon' => 'fa-solid fa-circle-check'
                ];

        $_SESSION['alert'] = $alert;

        unset($_POST);
    } 
}


?>