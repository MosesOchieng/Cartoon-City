<?php

// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["sessionCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Hello there welcome to plan B Jua Kali artisans. \n";
    $response .= "1. Login Account \n";
    $response .= "2. Change Password";;

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Log in with the options below to proceed. \n";
    $response .= "1. Phone Number Login \n";
    $response .= "2. ID Number Log In  \n";
    $response .="3. Back"; 
    
} else if ($text == "1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "CON Enter your phone  number :";
}else if($text = "1*2"){
    $response = "CON Enter your ID Number :";

}else if($text == "1*3"){
    $response = "CON You Logged back";
    $response .="1.3 Login Account";
    $response .="1.3 Change password";

}else if($text = "1*2"){
    $response = "CON ";
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;


?>