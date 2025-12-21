

<?php
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
$_SESSION["isLoggedIn"] = true;
$_SESSION["email"] = $email;

Header("Location: ..\View\dashboard.php");
}
?>

