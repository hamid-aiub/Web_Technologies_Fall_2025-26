<?php 

$Email = $_REQUEST["email"];
$Password = $_REQUEST["password"];

echo "Email : $Email<br>";
echo "Password : $Password<br>";

?>

<html>
<head>
    <script src="..\controller\JS\loginValidation.js"> </script>
</head>
<body>

<form method="post" action="" onsubmit="return handleValidation()">
    <table >

    <tr>

    <td>
        Email
    </td>
    <td>
        <input type="text" name="email" id="email"/>
    </td>
    <td>
        <p id="emailErr"></p>
    </td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" id="password" name="password"/> </td>
       <td> <p id="passwordErr"></p></td>
    </tr>
    <tr>
       <td> <input type="submit" name="Login" value="Login"/></td>
    </tr>
    </table>
</form>
</body>
</html>