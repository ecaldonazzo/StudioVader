<?php

session_start();
include('conexao.php');



//LOGIN

$btnlogin = filter_input(INPUT_POST, 'btnlogin', FILTER_SANITIZE_STRING);
if ($btnlogin) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


    if ((!empty($usuario)) && (!empty($senha))) {
        $sqlLogin = "
            select  
                id_login,
                usuario,
                senha
            from
                login
            where
                usuario = '". $usuario ."'
                  ";

         $login = $objclasse->MySelect($sqlLogin);

         if($login){
             $row_login = mysqli_fetch_assoc($login);
             if(password_verify($senha,$row_login['senha'])){
                 header("location: index.php");
             }else{
                 $_SESSION['msg'] = "Login e Senha Incorretos!";
                 header("location: login.php");
             }
         }

    }
    else{
            $_SESSION['msg'] = "Login e Senha Incorretos!";
            header("location: login.php");
        }
}

//LOGOUT



