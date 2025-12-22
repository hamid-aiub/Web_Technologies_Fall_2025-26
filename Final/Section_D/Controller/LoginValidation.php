<?php
include "../Model/DatabaseConnection.php";


error_reporting(E_ALL);
ini_set("display_error", 1);

session_start();
$email = "";
$pass = "";

$email = $_POST["email"];
$pass = $_POST["password"];
// echo "Email - $email";
// echo "password - $pass";


$errors = [];
$previousValues = [];
if(!$email){
$errors["email"] = "Email field is required";
}
if(!$pass){
    $errors["password"] = "Password field is required";
}
if(count($errors) > 0){ 
    if(!$email){
        $_SESSION["emailError"] = $errors["email"]; // store in session
    }else{
        unset($_SESSION["emailError"]); //remove from session
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
    //Validation Success
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->signin($connection, "users", $email, $pass);

    if($result->num_rows > 0){
        $_SESSION["isLoggedIn"] = true;
        $_SESSION["email"] = $email;

        Header("Location: ..\View\dashboard.php");
    }else{
        $_SESSION["loginErr"] = "Email or Password is incorrect";
        Header("Location: ..\View\login.php");
    }

    
}
?>

