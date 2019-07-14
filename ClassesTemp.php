<?php
class MySQLConnection {
    var $host;
    var $user;
    var $pass;
    var $database;
    var $link;

    function OpenConnection(){
        $this->host     = 'localhost';
        $this->user     = 'vader';
        $this->pass     = 'StudioVader*2019';
        $this->database = 'studiovader';

        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->database);
        if (!$this->link) {
            echo "Não foi possível realizar conexão com o banco." . PHP_EOL;
            echo "Erro: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        else {
            return $this->link;
            $this->CloseConnection($this->link);
        }
    }

    function LoginValidate($email,$pass,$debug = false){
        $sqlLogin = "
            select  
                idlogin,
                login,
                nome
            from
                login
            where
                email = '".$email."' and
                senha = '".$pass."'            
        ";
        if ($debug) {
            echo $sqlLogin;exit;
        }
        else {
            $mysqli = $this->OpenConnection();
            $resultLogin = $mysqli->query($sqlLogin);
            return $resultLogin;
            $this->CloseConnection($this->link);
        }
    }

    function MySelect($select,$debug = false){
        if ($debug) {
            echo $select;exit;
        }
        else {
            $mysqli = $this->OpenConnection();
            $result = $mysqli->query($select);
            return $result;
            $this->CloseConnection($this->link);
        }
    }

    function MyQuery($query,$debug = false){
        if ($debug) {
            echo $query;exit;
        }
        else {
            $mysqli = $this->OpenConnection();
            $mysqli->query($query);
            $result = $mysqli->affected_rows;
            return $result;
            $this->CloseConnection($this->link);
        }
    }

    function CloseConnection($link){
        mysqli_close($this->link);
    }
}

class Messages {
    var $message;
    function NoRecordsFound(){
        $this->message = "      
            <div class='alert alert-warning' role='alert'>
                Nenhum registro encontrado!
            </div>            
        ";
        return $this->message;
    }
}
?>