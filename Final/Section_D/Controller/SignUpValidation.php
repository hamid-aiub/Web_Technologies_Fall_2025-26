<?php
include "../Model/DatabaseConnection.php";

$path = __DIR__."/../Model/DatabaseConnection.php";
if(!file_exists($path)){
    die("Database File not found");
}

error_reporting(E_ALL);
ini_set("display_error", 1);

session_start();
$email = "";
$pass = "";

$email = $_POST["email"];
$pass = $_POST["password"];
$uploadFile = $_FILES["uploadFile"] ?? null;

echo "Email - $email";
echo "password - $pass";


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

    Header("Location: ..\View\signup.php");

}else{
    unset($_SESSION['errors']);
    unset($_SESSION['previousValues']);
    unset($_SESSION["signupErr"]);
    $path = "";
    if($uploadFile){
        $targetDir = "../uploads/";
        $path = $targetDir.basename($uploadFile["name"]);
        $isUploaded = move_uploaded_file($uploadFile["tmp_name"],$path);
    }
    //Validation Success
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->signup($connection, "users", $email, $pass, $path);

    if($result){
        Header("Location: ..\View\login.php");
    }else{
        $_SESSION["signupErr"] = "Sign up failed..";
        Header("Location: ..\View\signup.php");
    }

    
}
?>

