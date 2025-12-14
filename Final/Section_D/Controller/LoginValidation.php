

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
if(!$email){
$errors["email"] = "Email field is required";
}
if(!$pass){
    $errors["password"] = "Password field is required";
}
if(count($errors) > 0){

}else{
$_SESSION["isLoggedIn"] = true;
$_SESSION["email"] = $email;

Header("Location: ..\View\dashboard.php");
}
?>

