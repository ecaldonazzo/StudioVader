<?php

include_once ('conexao.php');

$where = "";

$pesquisa = filter_input(INPUT_POST,'btnPesquisar',FILTER_SANITIZE_STRING);
//Efetua a pesquisa
if ($pesquisa != "") {
    $where = "
                                             WHERE
                                           (
                                            nome_produtor LIKE '%".$pesquisa."%' OR
                                            celular_produtor LIKE '%".$pesquisa."%' OR
                                            email_produtor LIKE '%".$pesquisa."%'
                                            )   
                                             ";
} else {
    $where = "";
}
$result_pro = "
                                      SELECT 
                                        id_produtor, 
                                        nome_produtor,
                                        celular_produtor,
                                        email_produtor                        
                                      FROM 
                                        produtores                                    
                                        $where                                   
                                               ";