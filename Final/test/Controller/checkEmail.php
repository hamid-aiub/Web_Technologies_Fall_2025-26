<?php
$usedEmail = [
    "test@test.com",
    "test2@test.com"
];

$email = $_REQUEST["email"];

if($email == ""){
    echo json_encode([
        "message"=> "Email field is empty"
    ]);
    exit();
}else{
    if(in_array($email, $usedEmail)){
        echo json_encode([
            "message"=> "Email is already in use"
        ]); 
        exit();
    }else {
        echo json_encode([
            "message"=> "Email is free to use"
        ]); 
        exit();
    }
}

?>