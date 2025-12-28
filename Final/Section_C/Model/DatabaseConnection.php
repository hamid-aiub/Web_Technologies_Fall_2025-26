<?php 

class DatabaseConnection{
    function openConnection(){
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "section_c";
        $connection = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if($connection->connect_error){
            die("Failed to connect database ".$connection->connect_error);
        }
        return $connection;
    }

    function signup($connection, $tableName, $email, $password){
        $sql = "INSERT INTO ".$tableName." (email, password) VALUES ('".$email."', '".$password."')";
        $result = $connection->query($sql);
        return $result;
    }

    function signin($connection, $tableName, $email, $password){
        $sql = "SELECT * FROM ".$tableName." WHERE email='".$email."' AND password='".$password."'";
        $result = $connection->query($sql);
        return $result;
    }
    function checkEmail($connection, $tableName, $email){
        $sql = "SELECT * FROM ".$tableName." WHERE email='".$email."'";
        $result = $connection->query($sql);
        return $result;
    }

    function closeConnection($connection){
        $connection->close();
    }
}

?>