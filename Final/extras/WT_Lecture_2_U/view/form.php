<?php 
if(isset($_POST["Login"]))	{
    $Email = $_REQUEST["email"];
    $Password = $_REQUEST["password"];

    echo "Email is $Email <br>";
    echo "Password is $Password";

}

?>

<html>
    <head>
    <script src="..\JS\loginValidation.js"></script>
    </head>

<body>
    <form method="post" onsubmit="return handleValidate()" action="">
        <table>
        <tr>
        <td>
        Email <input type="text" id="email" name="email"/>
        </td>
        <td> <p id="emailErr" ></p></td>
</tr>
<tr>
        <td>
          Password <input type="password" id="password" name="password"/>
        </td>
        <td>   <p id="passErr"></p></td>
        </tr>
        <tr>
        <td>
       <input type="submit" name="Login" value="Login"/></td>
        </tr>

        </table>
    </form>
</body>
</html>