<?php
session_start();

$isLoggedIn= $_SESSION["isLoggedIn"] ?? false;
if(!$isLoggedIn){
    Header("Location: login.php");
}
$email = $_SESSION["email"] ??"";

setcookie("webtech_section_u", "Theory", time()+3600);
?>
<html>

<body>
    <h1>
        Hi, <?php echo $email;?>

    </h1>
    <a href="..\Controller\logout.php">Logout</a>
</body>
</html>