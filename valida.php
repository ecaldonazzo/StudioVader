<?php

session_start();
include('conexao.php');



//LOGIN

$btnlogin = filter_input(INPUT_POST, 'btnlogin', FILTER_SANITIZE_STRING);
if ($btnlogin) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


    if ((!empty($usuario)) && (!empty($senha))) {

        $login = $objclasse->LoginValidate($usuario,$senha);



    } else {
        $_SESSION['msg'] = "Login e senha incorreto!";
        header("location: login.php");
    }
}

//LOGOUT



