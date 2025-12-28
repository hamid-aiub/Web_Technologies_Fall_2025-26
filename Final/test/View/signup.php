<?php
session_start();
$isLoggedIn = false;

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if($isLoggedIn){
    Header("Location: ./dashboard.php");
}


$previousValues = $_SESSION["previousValues"] ?? [];


$errors = $_SESSION["errors"] ?? [];

unset($_SESSION['errors']);
unset($_SESSION['previousValues']);
?>

<html>
    <head>
        <script src="../Controller/JS/checkEmail.js"></script>
    </head>

<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>
                    Email
                </td>
                <td><input type="text" id="email" name="email" value="<?php echo $previousValues['email'] ?? '' ?>" onkeyup="CheckEmail()"/> </td>
                <!-- <td><?php echo $errors["email"] ?? ''; ?></td> -->
                <td><p id="AjaxResponse"></p></td>
            </tr>

            <tr>
                <td>Password</td>
            <td><input type="password" id="password" name="password"/> </td>
           <td><?php echo $errors["password"] ?? ''; ?></td>
        </tr>
        <tr>
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