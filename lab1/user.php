<?php
class User
{
    function __construct(){
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 'root', '123456');
    }

    function exeQuery($sql){
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    function find(){

    }
    function get(){

    } 
    function save(){
        
    }
}


$admin = new User();
$sql = "select * from users where id = 1";


var_dump($admin->exeQuery($sql));

?>