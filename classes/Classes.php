<?php


class MySQLClasses {
    var $host;
    var $user;
    var $pass;
    var $database;
    var $link;

    function OpenConnection(){
        $this->host     = 'localhost';
        $this->user     = 'root';
        $this->pass     = 'root';
        $this->database = 'vader';

        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->database);
        if (! $this->link) {
            echo "Não foi possível realizar conexão com o banco." . PHP_EOL;
            echo "Erro: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        } else {
            return $this->link;
            $this->CloseConnection($this->link);
        }

    }
    function CloseConnection($link){
        mysqli_close($this->link);
    }
    function LoginValidate($user,$debug = false){
        $sqlLogin = "
            SELECT  
                id_login,
                usuario,
                senha
            FROM
                login
            WHERE
                usuario = '". $user ."'
                  ";

        if ($debug) {
            echo $sqlLogin;
            exit;
        } else {
            $mysqli = $this->OpenConnection();
            $mysqli->query($sqlLogin);
            $resultLogin = $mysqli->fetch_object;
            return $resultLogin;
            $this->CloseConnection($this->link);
        }
    }
    function MySelect($select, $debug = false) {
        if ($debug) {
           echo $select;
           exit;
        } else {
            $mysqli = $this->OpenConnection();
            $result = $mysqli->query($select);
            return $result;
            $this->CloseConnection($this->link);
        }
    }
    function MyQuery($query, $debug = false) {
        if ($debug) {
            echo $query;
            exit;
        } else {
            $mysqli = $this->OpenConnection();
            $mysqli->query($query);
            $result = $mysqli->affected_rows;
            return $result;
            $this->CloseConeection($this->link);
        }
    }
}