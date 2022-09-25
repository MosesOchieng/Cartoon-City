<?php
require_once "connection.php";
//Unstructured supplementary  service data.
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

//setting default level to zero
$level = 0;

$response = explode("*",$text);

$level = count($response);

if($text == ""){
    //this is the 1st request (CON)
    $response = "Welcome to Plan B choose options to proceed. /n";
    $response1 = "1. Login account /n";
    $response1 = "2. Change Password.";
  
}else if ($text == "1"){
    //logic for the first level response.
    $response = "Looks like you made the first choice.Whats next?";
    $response1 = "1. Login with ID number /n";
    $response1 = "2. Login with Phone number /n";
    $response1 = "3. Back.";
}else if($text == "2"){
    $response = "Did you lose your password we got you covered.Follow steps below.";
    $response1 = "1.Enter your number to verify your account.";
    $response1 = "2.Back";
}else if($text == "1*1"){
    //second level response phase
    function identer($response){
        echo "CON $response";
    }
    $response = "Please enter your ID number to proceed:";
    identer($response);
    //entering id number
    $response = "Hello" .$name."of".$id_number."you will be redirected to the job page";
    
}else if($text == "1*2"){
    $phone_number = "phone";
    //entering phone number.
    $response = "Hello".$name."of".$phone_number."You will be redirected to the job page"; 
}else if ($text == "1*3"){
    $response = "Welcome to Plan B choose options to proceed";
    $response1 = "1. Login account";
    $response1 = "2. Change password";
}else if($text == "2*1"){
    $response = "Hello enter your password below";
    
    //changing to new password after number verification.
    function register($cpPassword){
        if(count($cpPassword) == 2){
            $response = "Enter your new password: ";
            function ussd_proceed($response){
                echo "CON $response";
            }
            ussd_proceed($response);//asking individual to input password.
        }
    }

}
// echo of response to server api .response depends on statement filled after each section.
header('Content-type;text/plain');
echo $response;
?>