<?php
session_start();
require_once ("public/lampp/connection.php");
if(isset($_SESSION['id'])!="") {
    header("Location:public/lampp/redirect.php");
}
if (isset($_POST['sig'])) {

$email = mysqli_real_escape_string($conn, $_POST['email']);

$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cppass']); 

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
}


if(isset($_POST['submit']) && $_POST['g-recaptcha-response']!="")
{
require_once "up.php";

include "public/lampp/connection.php";
$secret = '6Ldv9yQiAAAAAOlYN166rdHF4l21Os85M0LczQgF';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if($responseData->success)
{
$cpassword = $_POST['cppass'];
$email = $_POST['email'];
$password = $_POST['Password'];
mysqli_query($conn, "INSERT INTO planBdb(email ,conf pass, pass) VALUES('" . $_POST['email'] . "', '" . $_POST['cppass'] . "', '" . md5($_POST['password']) . "')");
echo "User registration form with captcha validation has been successfully saved";
}
}

?>