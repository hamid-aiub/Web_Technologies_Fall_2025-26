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
<script src="..\Controller\JS\checkEmail.js"> </script>
</head>
<body>


<form method="post" action="..\Controller\signUpValidation.php" enctype="multipart/form-data">
    <table >

    <tr>

    <td>
        Email
    </td>
     <td><input type="text" id="email" name="email" value="<?php echo $previousValues['email'] ?? '' ?>" onkeyup="findExistingEmail()"/> </td>
    <td id="erroremail"></td>
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
        <td>Upload File</td>
        <td><input type="file" id="fileUpload" name="fileUpload"/>
    </tr>
    <tr>
        <td></td>
        <td>
            <?php echo $loginErr; ?>
        </td>
    </tr>
    <tr>
       <td> <input type="submit" name="signup" value="Sign Up"/></td>
    </tr>
    </table>
</form>
</body>
</html>