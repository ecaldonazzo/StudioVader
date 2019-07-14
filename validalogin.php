<?php
session_start();
include ('conexao.php');

$objPassword = new Classes();

//LOGIN

$btnlogin = filter_input(INPUT_POST,'btnlogin',FILTER_SANITIZE_STRING);
if($btnlogin){
    $usuario = filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

    if((!empty($usuario)) && (!empty($senha))){
        $result_usuario = "
          SELECT 
            id_login, 
            usuario, 
            senha
          FROM 
            login
          WHERE 
            usuario = '".$usuario."'";

        $row_usuario = $objConexao->ExecutaConsulta($conexao,$result_usuario,'select');

        $objPassword->PasswordCheck($senha, $row_usuario->senha);

    }else{
        $_SESSION['msg'] = "Login e senha incorreto!";
        header("location: login.php");
    }
}else{
    $_SESSION['msg'] = "Login e senha incorreto!";
    header("location: login.php");
}

//LOGOUT



?>