<?php 
include "../Model/DatabaseConnection.php";
// $usedEmails = [
//     "test1@test.com",
//     "test2@test.com"
// ];

$email = $_POST['email'];

if($email == ""){
    echo json_encode([
        "message"=>"Email field is empty"
    ]);
    // exit();
}else{
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->checkEmail($connection, "users", $email);
    if($result->num_rows > 0){
        echo json_encode([
            "message"=>"Email is already used"
        ]);
        // exit();
    }else{
       echo json_encode([
            "message"=>"Email is free to use"
        ]); 
        // exit();
    }
}

?>