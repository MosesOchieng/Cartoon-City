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
    $response .= "2. Change Password";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Log in with the options below to proceed. \n";
    $response .= "1. Phone Number Login \n";
    $response .= "2. ID Number Log In";
    $response .= 

} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "CON Entering your number ";

} else if($text == "1*1") { 
    // This is a second level response where the user selected 1 in the first instance
    $accountNumber  = "ACC1001";

    // This is a terminal request. Note how we start the response with END
    $response = "END Your account number is ".$accountNumber;

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;


?>