<?php

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }else {
        $nome = $mysqli->real_escape_string($_POST ['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
    
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' ";
        $sql_query = $mysqli->query($sql_code);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            echo "Este email já está sendo utilizado!";
        } else {
            
            $sql_code = "INSERT INTO usuarios (id, nome, email, senha) VALUES (0, '$nome', '$email', '$senha')";
            $sql_query = $mysqli->query($sql_code);
            unset($_POST);
        } 
    }
}

?>