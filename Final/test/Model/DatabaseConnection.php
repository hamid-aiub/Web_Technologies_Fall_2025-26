<?php
class DatabaseConnection{
    function openConnection(){
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "test_abcd";

        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
        if($connection->connect_error){
            die("failed to connect database ". $connection->connect_error);
        }
        return $connection;

    }

    function signup($connection, $tableName, $email, $password){
        $query = "INSERT INTO ".$tableName. " (email, password) VALUES ('".$email."', '".$password."')";
        $result = $connection->query($query);
        if(!$result){
            error_log("Failed to signup ". $connection->error);
        }
        return $result;
    }

    function signin($connection, $tableName, $email, $password){
        $query = "SELECT * FROM ".$tableName." WHERE email='".$email."' AND password='".$password."'";
        $result = $connection->query($query);
        if(!$result){
            error_log("Failed to fetch users data ".$connection->error);
        }
        return $result;
    }
    function closeConnection($connection){
        $connection->close();
    }
}


?>