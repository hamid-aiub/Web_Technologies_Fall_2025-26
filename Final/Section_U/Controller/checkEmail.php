<?php
include "../Model/DatabaseConnection.php";
$Email="";
$Email=$_POST["Email"];

if($Email==""){
    echo "Email Empty";
}
else{
    // echo $Email;
    $db=new DatabaseConnection();
    $connection=$db->openConnection();
    $result=$db->checkExistingUser($connection,"users",$Email);
    if ($result->num_rows > 0)
    {
       echo "Email Already Used";
    }

    else{
            echo "Unique Email, can be used";
    }
    // $connection->closeConnection($conobj);
}




?>