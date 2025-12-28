<?php 
include "../Model/DatabaseConnection.php";
$usedEmails = [
    "test@test.com",
    "test2@test.com"
];


$email = $_POST["email"];
if($email == ""){
    echo json_encode([
        "message"=>"Email filed is empty"
    ]);
}else{
    // if(in_array($email, $usedEmails)){
    //     echo json_encode([
    //     "message"=>"Email is already used"
    // ]);
    // }else{
    //     echo json_encode([
    //     "message"=>"Email is free to use"
    // ]);
    // }

    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->checkEmail($connection, "users", $email);
    if($result->num_rows >0) {
     echo json_encode([
        "message"=>"Email is already used"
    ]);
    }else{
             echo json_encode([
        "message"=>"Email is free to use"
    ]);
    }

}



?>