<?php 
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;
if($isLoggedIn){
    Header("Location: dashboard.php");
}
$emailErr = $_SESSION["emailErr"] ?? "";
$passwordErr = $_SESSION["passwordErr"] ?? "";
$loginErr = $_SESSION["signUpErr"] ?? "";

$previousValues = $_SESSION["previousValues"] ?? [];


unset($_SESSION["previousValues"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["passwordErr"]);
unset($_SESSION["signUpErr"]);
unset($_SESSION["loginErr"]);


?>

<html>
<head>
    <script src="../Controller/JS/checkEmail.js"></script>
</head>
<body>
<!-- <pre><?php echo $previousValues["email"];?></php></pre> -->
<form method="post" onsubmit="" action="../Controller/handleSignupValidation.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="email" onkeyup="findExistingEmail()" placeholder="Enter your email" value="<?php echo $previousValues["email"] ?? "" ?>" /> </td>
            <td><p id="ajaxResponse"></p></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"  placeholder="Enter password" /></td>
            <td><?php  echo $passwordErr; ?></td>
        </tr>
        <tr>
            <td>Upload File</td>
            <td><input type="file" name="fileupload" id="fileupload"/> </td>
        </tr>

        <tr>
            <td></td>
            <td><?php echo $loginErr; ?></td>
        </tr>
        <tr>
            <td><input type="submit" name="signup" value="Sign Up"/> </td>
        </tr>
    </table>
</form>
</body>
</html>