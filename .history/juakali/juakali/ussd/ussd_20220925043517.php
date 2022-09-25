<?php
//Unstructured supplementary  service data.
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];


if($text == ""){
    //this is the 1st request (CON)
    $response = "Welcome to Plan B choose options to proceed. /n";
    $response1 = "1. Login account /n";
    $responses = "3. Change Password.";
}else if ($text == "1"){
    //logic for the first level response.
    $response = "Looks Follow the procedures below";
    $response1 = "1. Login with ID number /n";
    $response1 = "2. Login with Phone number";
}else if($text == "2"){
    $response = ""
}


?>