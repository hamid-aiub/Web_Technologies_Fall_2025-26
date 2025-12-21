<?php
session_start();
$isLoggedIn = false;

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if($isLoggedIn){
    Header("Location: ./dashboard.php");
}


$previousValues = $_SESSION["previousValues"] ?? [];

$signupErr = $_SESSION["signupErr"] ?? "";

$errors = $_SESSION["errors"] ?? [];

unset($_SESSION['errors']);
unset($_SESSION['previousValues']);
unset($_SESSION["signupErr"]);
?>

<html>

<body>
    <form method="post" action="..\Controller\SignUpValidation.php">
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
            <td>

            </td>
            <td><?php echo $signupErr; ?></td>
</tr>

            <tr>

            <td>
                <input type="submit" name="signup" value="Sign Up"/>
            </td>
            </tr>
        </table>
    </form>
</body>
</html>