<?php
session_start();
$isLoggedIn = false;

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if($isLoggedIn){
    Header("Location: ./dashboard.php");
}


$previousValues = $_SESSION["previousValues"] ?? [];

$loginErr = $_SESSION["loginErr"]  ?? "";

$errors = $_SESSION["errors"] ?? [];

unset($_SESSION['errors']);
unset($_SESSION['previousValues']);
unset( $_SESSION["loginErr"]);
?>

<html>
    <head>
  <script src="../Controller/JS/test.js"></script>
</head>

<body>
    <form method="post" action="..\Controller\LoginValidation.php">
        <table>
            <tr>
                <td>
                    Email
                </td>
                <td><input type="text" id="email" name="email" value="<?php echo $previousValues['email'] ?? '' ?>"/> </td>
                <td><?php echo $errors["email"] ?? ''; ?></td>
            </tr>

            <tr>
                <td>Password</td>
            <td><input type="password" id="password" name="password"/> </td>
           <td><?php echo $errors["password"] ?? ''; ?></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $loginErr;?></td>
        </tr>

            <tr>

            <td>
                <input type="submit" name="login" value="Login"/>
            </td>
            </tr>
        </table>
    </form>
</body>
</html>