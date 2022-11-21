<?php



// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["sessionCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Hello there welcome to Plan B Jua Kali artisans. \n";
    $response .= "1. Find JuaKali Artisans \n";
    $response .= "2. Find A JuaKali Job. \n";
    $response .= "3. Report a case. \n";
    $response .= "4. About Plan B Jua Kali.";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON What time frame do you need your work avaialable. \n";
    $response .= "1. Immediately available \n";
    $response .= "2. Later avaialable \n";
    $response .= "3. Connect to previous artisan. \n";
    $response .= "4. Back";

}else if($text == "2"){
  $response = "CON Enter your phone  number: \n";

}else if($text == "3"){
  $response = "END Hello there";

}else if($text == "1*1"){
    $response = "CON Choose Job Listing \n";
    $response .="1. Carpenter \n";
    $response .="2. Mason and Plumber \n";
    $response .="3. Fisherman \n";
    $response .="4. Electrical repairs";

}else if($text == "3*1"){
    $store = "";
    $response = "END  You last client is ".$store;
}else if($text == "4*1"){
  $about = "Plan B is a software that enables job searching juakali artisans to find jobs closest to them.";

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

?>
