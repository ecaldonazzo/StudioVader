<?php
session_start();
include_once ('conexao.php');

$btnsalvar = filter_input(INPUT_POST,'salvar', FILTER_SANITIZE_STRING);

if ($btnsalvar) {

    $pro_vetor = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $pro_strip = array_map('strip_tags', $pro_vetor);
    $pro_ok = array_map('trim',$pro_strip);

    $erro = false;

    if (in_array('',$pro_ok)) {
        $erro = true;
        $_SESSION['msg'] = "<b style='color:red;'> Necessario Preencher todos os Campos.</b>";
        header("Location: produtor.php");
    } else {
        $queryprodutor = "
        SELECT
        id_produtor
        FROM
        produtores
        WHERE
        nome_produtor = '" . $pro_ok['produtor'] . "'
        ";
        $procon = $objclasse->MySelect($queryprodutor);

        if (mysqli_num_rows($procon) > 0 ) {
             $erro = true;
            $_SESSION['msg'] = "<b style='color:orange;'> Produtor já Cadastrado, tente novamente!</b>";
            header("Location: produtor.php");
        }
    }

    if ($erro === true) {
        header("Location: produtor.php");
    } else {
        $insertprodutor = "
        INSERT INTO
          produtores
          (nome_produtor,
          celular_produtor,
          email_produtor)
        VALUES
         ('" . $pro_ok['produtor'] . "',
          '" . $pro_ok['celular_produtor'] . "',
          '" . $pro_ok['email_produtor'] . "')           
           ";

        $objclasse->MyQuery($insertprodutor);

        $_SESSION['msg'] = "<b style='color:green;'>Produtor Cadastrado com Sucesso!</b>";
        header("Location: produtor.php");

    }
}
