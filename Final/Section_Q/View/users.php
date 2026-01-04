<?php
include "../Model/DatabaseConnection.php";
session_start();



function TableHeader(){
    echo "<table border=1><tr>
            <th>ID</th>
            <th>Email</th>
            <th>Profile Picture</th>
          </tr>";
}
function TableRow(){
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $users = $db->getAllUsers($connection, "users");
    if($users->num_rows > 0){
        while($user = $users->fetch_assoc()){
            echo "<tr>
            <td>".$user['id']."</td>
            <td>".$user['email']."</td>
            <td><img src='".$user["filepath"]."' width='50' height='50'/> </td>
          </tr>";
        }
    }
    echo "</table>";
}


TableHeader();
TableRow();
$db->closeConnection($connection);

?>