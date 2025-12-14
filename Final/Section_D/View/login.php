<?php
session_start();
// $isLoggedIn = false;

// $isLoggedIn = $_SESSION["isLoggedIn"];

// if($isLoggedIn){
//     Header("Location: ./dashboard.php");
// }

session_destroy();
echo "test";
?>

<html>

<body>
    <form method="post" action="..\Controller\LoginValidation.php">
        <table>
            <tr>
                <td>
                    Email
                </td>
                <td><input type="text" id="email" name="email"/> </td>
            </tr>

            <tr>
                <td>Password</td>
            <td><input type="password" id="password" name="password"/> </td>
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