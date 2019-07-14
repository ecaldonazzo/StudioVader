<?php
include "classes/Classes.php";

//instancia o objeto
$objConexao = new Classes();

// utiliza metodo para conectar com o banco
$objConexao->Conecta();
$conexao = $objConexao->GetConexao();
?>