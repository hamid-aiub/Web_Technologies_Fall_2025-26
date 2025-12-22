<?php 
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;
if($isLoggedIn){
    Header("Location: dashboard.php");
}
$emailErr = $_SESSION["emailErr"] ?? "";
$passwordErr = $_SESSION["passwordErr"] ?? "";
$loginErr = $_SESSION["loginErr"] ?? "";

$previousValues = $_SESSION["previousValues"] ?? [];


unset($_SESSION["previousValues"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["passwordErr"]);


?>

<html>

<body>
<!-- <pre><?php echo $previousValues["email"];?></php></pre> -->
<form method="post" onsubmit="" action="..\Controller\handleLoginValidation.php">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"  placeholder="Enter your email" value="<?php echo $previousValues["email"] ?? "" ?>"/> </td>
            <td><?php echo $emailErr; ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"  placeholder="Enter password" /></td>
            <td><?php  echo $passwordErr; ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $loginErr; ?></td>
        </tr>
        <tr>
            <td><input type="submit" name="login" value="Login"/> </td>
        </tr>
    </table>
</form>
</body>
</html>