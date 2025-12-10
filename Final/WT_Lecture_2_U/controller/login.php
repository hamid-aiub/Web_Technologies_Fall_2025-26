<?php 

if(isset($_POST["Login"]))	{
    $Email = $_REQUEST["email"];
    $Password = $_REQUEST["password"];

    echo "Email is $Email <br>";
    echo "Password is $Password";

}



?>