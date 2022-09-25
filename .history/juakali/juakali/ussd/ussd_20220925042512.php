<?php
//Unstructured supplementary  service data.
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];


if($text == ""){
    //this is the 1st request (CON)
    $response = "Welcome to Plan B what would you like to create /n";
    $response .= "1. Create Account /n";
    $responses = "2. Login account /n";
    $responses = "3. Change Password.";
}else if ($text == "1"){
    //logic for the first level response.
    $response .= ""
}


?>