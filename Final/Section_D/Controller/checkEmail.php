<?php
include "../Model/DatabaseConnection.php";
$Email="";
$Email=$_POST["Email"];

if($Email==""){
    echo "Email Empty";
}
else{

    $connection=new DatabaseConnection();
    $conobj=$connection->openConnection();
    $result=$connection->checkExistingUser($conobj,"users",$Email);
    if ($result->num_rows > 0)
    {
       echo "Email Already Used";
    }

    else{
            echo "Unique Email";
    }
    $connection->closeConnection($conobj);
}




?>