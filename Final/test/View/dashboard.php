<?php
session_start();
?>

<html>

<body>
    <h1>Dashboard</h1>
    <h1>Hi, <?php echo $_SESSION["email"];?></h1>
</body>
</html>