<?php
session_start();
include_once ('conexao.php');

$btnsalvarmusico = filter_input(INPUT_POST,'salvarmusico',FILTER_SANITIZE_STRING);

if ($btnsalvarmusico) {

    $vetormusicos = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    $vetormusicos_st = array_map('strip_tags',$vetormusicos);
    $vetormusicos_ok = array_map('trim',$vetormusicos_st);

    $erro = false;

    if (in_array('',$vetormusicos_ok)) {
        $erro = true;
        $_SESSION['msg'] = "<b style='color:red;'> Necessario Preencher todos os Campos.</b>";
        header("Location: musicos.php");
    } else {
        $sqlmusicos = "
        SELECT
        id_musico
        FROM
        musico = '" . $vetormusicos_ok['musico'] . "'";

        $musicoquerry = $objclasse->MySelect($sqlmusicos);

        if (mysqli_num_rows($musicoquerry) > 0 ) {
            $erro = true;
            $_SESSION['msg'] = "<b style='color:orange;'> Musico já Cadastrado, tente novamente!</b>";
            header("Location: musicos.php");
        }

    }

    if ($erro === true) {
        header("Location: musicos.php");
    } else {
        $insertmusico = "
        INSERT INTO
          musico
          (musico,
          celular_musico,
          email_musico,
          obs_musico,
          id_instrumento_musico)
        VALUES
         ('" . $vetormusicos_ok['musico'] . "',
          '" . $vetormusicos_ok['celular_musico'] . "',
          '" . $vetormusicos_ok['email_musico'] . "',
          '" . $vetormusicos_ok['obs_musico'] . "',
          '" . $vetormusicos_ok['id_instrumento_musico'] . "')           
           ";

        $objclasse->MyQuery($insertmusico);

        $_SESSION['msg'] = "<b style='color:green;'>Musico Cadastrado com Sucesso!</b>";
        header("Location: musicos.php");

    }


}