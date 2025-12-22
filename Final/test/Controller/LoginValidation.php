<?php
include "../Model/DatabaseConnection.php";

$path = __DIR__."/../Model/DatabaseConnection.php";
if(!file_exists($path)){
    die("file not found...");
}

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();
$email = "";
$password = "";

if(isset($_REQUEST["login"])){
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["password"];
    echo "Email - $email";
    echo "password - $pass";
}

$errors = [];
$previousValues = [];
if(!$email){
$errors["email"] = "Email field is required";
}
if(!$pass){
    $errors["password"] = "Password field is required";
}
if(count($errors) > 0){
    $_SESSION["errors"] = $errors;
    if(!$email){
        $_SESSION["emailError"] = $errors["email"];
    }else{
        unset($_SESSION["emailError"]);
    }

    if(!$pass){
        $_SESSION["passwordError"] = $errors["password"];
    }else{
         unset($_SESSION["passwordError"]);
    }


    $previousValues["email"] = $email;
    $_SESSION["previousValues"] = $previousValues;

    Header("Location: ..\View\login.php");

}else{

    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->signin($connection, "users", $email, $pass);

    if($result->num_rows > 0){
        $_SESSION["isLoggedIn"] = true;
        $_SESSION["email"] = $email;

        Header("Location: ..\View\dashboard.php");
    }else{
        Header("Location: ..\View\login.php");
    }

}
?>

