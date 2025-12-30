<?php
// session_start();
// $isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

// if(!$isLoggedIn){
//     Header("Location: ./login.php");
// }
$encoded_email  = $_COOKIE["email"] ?? "";
$email = json_decode($encoded_email);
if(!isset($_COOKIE["isLoggedIn"])){
    Header("Location: ./login.php");
}

?>

<html>

<body>
    <h1>Dashboard</h1>
    <h1>Hi, <?php echo $email;?></h1>
    <a href="..\Controller\logout.php">Logout</a>
</body>
</html>