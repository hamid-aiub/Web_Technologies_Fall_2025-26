<?php
include "../Model/DatabaseConnection.php";
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$uploadFile = $_FILES["fileUpload"];
$errors = [];
$values = [];

if(!$email){
$errors["email"] = "Email field is required";
}

if(!$password){
    $errors["password"] = "Password field is required";
}

if(count($errors) > 0){
    if($errors["email"]){
        $_SESSION["emailErr"] = $errors["email"];
    }
    else{
       if($_SESSION["emailErr"]){
         unset($_SESSION["emailErr"]);
       }
    }

    if($errors["password"]){
        $_SESSION["passwordErr"] = $errors["password"];
    }

$values["email"] = $email;
$_SESSION["previousValues"] = $values;

Header("Location: ..\View\login.php");

}else{
    $path = "";
    if($uploadFile){
        $targetDir = "../uploads/";
        $path = $targetDir . basename($uploadFile["name"]);
        move_uploaded_file($uploadFile["tmp_name"], $path);
    
    }

    // $data = ["email"=> "test@test.com","password"=> 'password'];
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->signup($connection, "users", $email, $password, $path);

    if($result){
        Header("Location: ..\View\login.php");

    }else{
      $_SESSION["LoginErr"] = "Failed to sign up, please try again later";  
      Header("Location: ..\View\signup.php");
      unset($_SESSION["emailErr"]);
      unset($_SESSION["passwordErr"]);
    }


    
}

?>