<?php 

echo "Hi, Here we will show form data..<br>";

// $Email = $_REQUEST["email"];
// $Password = $_REQUEST["password"];

// echo "You have entered email : $Email<br>";
// echo "You have entered password : $Password<br>";
?>

<html>
<head>
    <script src="..\controller\JS\loginValidation.js"></script>
</head>
<body>

<form method="post" onsubmit="return handleValidation()" action="">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="email" placeholder="Enter your email"/> </td>
            <td><p id="emailErr" > </p></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password" placeholder="Enter password" /></td>
            <td><p id="passErr" ></p></td>
        </tr>
        <tr>
            <td><input type="submit" name="login" value="Login"/> </td>
        </tr>
    </table>
</form>
</body>
</html>