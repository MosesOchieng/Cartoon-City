<?php
require_once "connection.php";
//Unstructured supplementary  service data.
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];


// echo of response to server api .response depends on statement filled after each section.
header('Content-type;text/plain');
echo $response;
?>