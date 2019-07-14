<?php
/**
 * Created by PhpStorm.
 * User: esdra
 * Date: 09/10/2018
 * Time: 19:13
 */

class Classes
{
    function Conecta() {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "vader";
        $this->conexao = mysqli_connect($this->servidor,$this->usuario,$this->senha,$this->banco) or die ("Não foi Possivel Conectar");
    }

    function GetConexao(){
        return $this->conexao;
    }

    function ExecutaConsulta($conexao,$query,$tipo,$retornaMsg=True,$debug=False){

        $this->query = mysqli_query($conexao, $query);

        switch($tipo){
            case 'select':
                if (mysqli_num_rows($this->query) == 0) {
                    if ($retornaMsg) {
                        echo "Nenhum registro foi encontrado!";
                    }
                } else {
                    $this->result = mysqli_fetch_object($this->query);
                    if ($debug) {
                        print_r($this->result);
                        exit;
                    } else {
                        return $this->result;
                    }
                }
                break;

            /* Case para tratar inserções */
            case 'insert':
                if (mysqli_affected_rows($this->conexao)>0) {
                    echo "Registro efetuado com sucesso!";
                } else {
                    echo "Registro Nao inserido!";
                }
                break;
        }
    }

    function ValidaUsuario($conexao,$query,$debug=False){

        $this->query = mysqli_query($conexao, $query);

        if($this->query->num_rows > 0) {
            $_SESSION['msg'] = "Usuario já cadastrado, tente novamente";
            header("Location: register.php");
        }
    }


    function PasswordCheck($senha, $checksenha){
        if(password_verify($senha, $checksenha)){
            header("location: index.php");
        }else{
            $_SESSION['msg'] = "Nao conseguiu!";
            header("location: login.php");
        }
    }
}