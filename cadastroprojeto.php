<?php
session_start();
include_once ("conexao.php");

$btconcluir = filter_input (INPUT_POST, 'concluir1', FILTER_SANITIZE_STRING);

if($btconcluir){
    $dad = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    $dad_st = array_map('strip_tags', $dad);
    $dad_ok = array_map('trim',$dad_st);

    $erro = false;

    if(in_array('',$dad_ok)){
    $erro = true;
    $_SESSION['msg'] = "Necessario preencher todos os campos";
    header("Location: projeto.php");

    }

    elseif($erro === true){
        header("Location: projetos.php");

    }else {
        /*
         $insereProdutor = "
          insert into produtores 
            (nome_produtor) 
          values 
            ('".$dad['produtor']."')
         ";
        echo $insereProdutor;exit;
        $objConexao->ExecutaConsulta($conexao,$insereProdutor,'insert');
        $idProdutor = mysqli_insert_id($conexao);
        */

        $resultado = "
        INSERT INTO
            projetos 
              (album, 
              data_ini, 
              data_fim,
              num_faixas,
              id_genero_projeto,
              id_produtor,
              id_banda)
             
        VALUES 
            ('".$dad['album']."',
            '".$dad['data_ini']."',
            '".$dad['data_fim']."', 
            ".$dad['num_faixas'].",
            ".$dad['genero'].",
             ".$dad['produtor'].",
            ".$dad['banda'].")";
        //echo $resultado;exit;
        $objConexao->ExecutaConsulta($conexao,$resultado,'insert');


         }
}



