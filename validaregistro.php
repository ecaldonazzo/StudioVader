<?php
session_start();
include_once("conexao.php");

$botaoregistrar = filter_input(INPUT_POST,'registrar',FILTER_SANITIZE_STRING);

if ($botaoregistrar) {

    $dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    $dados_st = array_map('strip_tags', $dados);
    $dados_ok = array_map('trim', $dados_st);

    $erro = false;


    if (in_array('', $dados_ok)) {
        $erro = true;
        $_SESSION['msg'] = "Necessario preencher todos os campos";
        header("Location: register.php");
    } elseif ((strlen($dados_ok['senha'])) < 6) {
        $erro = true;
        $_SESSION['msg'] = "A senha deve conter no minimo 6 caracteres";
        header("Location: register.php");
    } elseif (stristr($dados_ok['senha'],"'")) {
        $erro = true;
        $_SESSION['msg'] = "Não é permite uso do caracter ('), tente novamente";
        header("Location: register.php");
    } elseif ($dados_ok['senha'] !== $dados_ok['confirme']) {
        $erro = true;
        $_SESSION['msg'] = "Senha não confirmada, tente novamente";
        header("Location: register.php");
    } else {
        $selectusuario = "
        SELECT
          id_login
        FROM
          login
        WHERE
          usuario = '". $dados_ok['usuario'] ."'
          ";

        $uservalida = $objclasse->MySelect($selectusuario);

        if (mysqli_num_rows($uservalida) > 0) {
            $erro = true;
            $_SESSION['msg'] = "Usuario já cadastrado, tente novamente";
            header("Location: register.php");
        }
    }

    if ($erro === true) {
        header("Location: register.php");
    } else {
        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $result_usuario = "
        INSERT INTO
        login
        (nome,
        usuario,
        senha)
        VALUES
        ('" . $dados['nome'] . "',
         '" . $dados['usuario'] . "',
         '" . $dados['senha'] . "')
         ";

        $objquery = $objclasse->MyQuery($result_usuario);

        $_SESSION['msg'] = "Usuario cadastrado com Sucesso";
        header("Location: login.php");
    }
}

