
<?php 
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;
if (!$isLoggedIn) {
    Header("Location: login.php");
}

$email = $_SESSION["email"] ??"";

?>

<html>

<body>
    <h1>This is dashboard</h1>
    <h2>Welcome <?php echo $email;?></h2>
    <!-- <img src="../uploads/blue.png" /> -->
    <a href="..\Controller\logout.php">Logout</a>
</body>
</html>