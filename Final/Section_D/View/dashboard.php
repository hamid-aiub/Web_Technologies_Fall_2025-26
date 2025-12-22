<?php
session_start();
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if(!$isLoggedIn){
    Header("Location: ./login.php");
}

?>

<html>

<body>
    <h1>Dashboard</h1>
    <h1>Hi, <?php echo $_SESSION["email"];?></h1>
    <a href="..\Controller\logout.php">Logout</a>
</body>
</html>