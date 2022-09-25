<?php
require_once "connection.php";
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
    $response = "Looks like you made the first choice.Whats next?";
    $response1 = "1. Login with ID number /n";
    $response1 = "2. Login with Phone number /n";
    $response1 = "3. Back.";
}else if($text == "2"){
    $response = "Did you lose your password we got you covered.Follow steps below.";
    $responses = "1.Enter your number to receive your password.";
    $responses = "2.Back";
}else if($text == "1*1"){
    //second level response phase
    $id_number="id";
    //entering id number
    $response = "Hello" .$name."of".$id_number."you will be redirected to the job page";
    $response1 = "1.Continue";
}else if($text == "1*2"){
    $phone_number = "phone";
    //entering phone number.
    $response = "Hello".$name."of".$phone_number."You will be redirected to the job page";
    $responses="1. Continue";
}else if ($text)



?>