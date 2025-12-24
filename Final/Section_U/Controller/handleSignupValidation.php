<?php 
include "../Model/DatabaseConnection.php";

error_reporting(E_ALL);
ini_set("display_error", 1);

session_start();

$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$fileupload = $_FILES["fileupload"] ?? null;

$errors = [];
$values = [];

if(!$email){
    $errors["email"] = "This is a required field";
}
if(!$password){
    $errors["password"] = "Password field is required";
}

if(count($errors) > 0){
    if($errors["email"] != ""){
        $_SESSION["emailErr"] = $errors["email"];
    }else{
        unset($_SESSION["emailErr"]);
    }
    if($errors["password"] != ""){
        $_SESSION["passwordErr"] = $errors["password"];
    }else{
        unset($_SESSION["passwordErr"]);
    }
$values["email"] = $email;

$_SESSION["previousValues"] = $values;

Header("Location: ..\View\signup.php");

}else{
    $path = "";
    if($fileupload){
        $targetDir = "../uploads/";
        $path = $targetDir.basename($fileupload["name"]);
        $isUploaded = move_uploaded_file($fileupload["tmp_name"], $path);
        echo "Is Uploaded ....".$isUploaded;
    }
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->signUp($connection, "users", $email, $password, $path);
    if($result){
        Header("Location: ..\View\login.php");
      
    }else{
        $_SESSION["signUpErr"] = "Failed to signup";
        Header("Location: ..\View\signup.php");
    }
    
}

?>