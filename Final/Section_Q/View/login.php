<?php
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;
if ($isLoggedIn) {
    Header("Location: dashboard.php");
}

$emailErr =  $_SESSION["emailErr"] ?? '';
$passErr = $_SESSION['passwordErr'] ??'';
$previousValues = $_SESSION['previousValues'] ??[];
$loginErr = $_SESSION["LoginErr"] ??"";


unset($_SESSION['previousValues']);
unset($_SESSION["LoginErr"]);

?>


<html>
<head>
  
</head>
<body>

<!-- <pre><?php echo $previousValues["email"]; ?></pre> -->
<form method="post" action="..\Controller\loginValidation.php" >
    <table >

    <tr>

    <td>
        Email
    </td>
    <td>
        <input type="text" name="email" id="email" value="<?php echo $previousValues["email"] ?? '' ?>"/>
    </td>
    <td>
      <?php echo $emailErr;?>
    </td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" id="password" name="password"/> </td>
       <td>  <?php echo $passErr;?></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <?php echo $loginErr; ?>
        </td>
    </tr>
    <tr>
       <td> <input type="submit" name="Login" value="Login"/></td>
    </tr>
    </table>
</form>
</body>
</html>