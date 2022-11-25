<?php

if(isset($_POST['email']) || isset($_POST['senha'])) {
   
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code);

    $quantidade = $sql_query->num_rows;
    //Retornar a quantidade de linhas encontradas no banco

    if($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['autenticado'] = 'SIM';

        header("Location: painel.php");

    } else if($quantidade == 0){

        $_SESSION['alert'] = $alert = [];
        $alert = [
                    'mensagem' => 'Usuário inexistente.',
                    'style' => 'alert-danger ',
                    'icon' => 'fa-solid fa-triangle-exclamation'
                ];

        $_SESSION['alert'] = $alert;

        unset($_POST);

    } else {
        $_SESSION['alert'] = $alert = [];
            $alert = [
                        'mensagem' => 'E-mail ou senha incorretos.',
                        'style' => 'alert-danger ',
                        'icon' => 'fa-solid fa-triangle-exclamation'
                    ];

            $_SESSION['alert'] = $alert;

        unset($_POST);
        
    }
}


?>