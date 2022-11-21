<?php
session_start();
require_once ("public/lampp/connection.php");
if(isset($_SESSION['myprefix-'])!="submit") {
    header("Location: ../redirect.php");
}
require ("up.php");
require("login.php");

if (isset($_GET['submit'])) {

$email = mysqli_real_escape_string($conn, $_GET['email']);

$password = mysqli_real_escape_string($conn, $_GET['password']);
$cpassword = mysqli_real_escape_string($conn, $_GET['cppass']); 
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}       

if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}
mysqli_close($conn);


if(isset($_GET['submit']) && $_GET['g-recaptcha-response']!="")
{
require_once "up.php";
require_once "login.php";

include "public/lampp/connection.php";
$secret = '6Ldv9yQiAAAAAOlYN166rdHF4l21Os85M0LczQgF';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_GET['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if($responseData->success)
{
$cpassword = $_GET['cppass'];
$email = $_GET['email'];
$password = $_GET['Password'];
mysqli_query($conn, "INSERT INTO planBdb(email ,conf pass, pass) VALUES('" . $_GET['email'] . "', '" . md5($_GET['cppass']). "', '" . md5($_GET['password']) . "')");
echo "User registration form with captcha validation has been successfully saved";
}
}
exit();
?>