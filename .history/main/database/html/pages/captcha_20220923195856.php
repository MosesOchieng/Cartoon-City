<?php
if(isset($_POST['submit']) && $_POST['g-recaptcha-response']!="")
{
require_once "sign-up.php";

include "public/lampp database/connection.php";
$secret = '6Ldv9yQiAAAAAOlYN166rdHF4l21Os85M0LczQgF';
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if($responseData->success)
{
$cpassword = $_POST['cppass'];
$email = $_POST['exampleInputIcon4'];
$password = $_POST['exampleInputPassword7'];
mysqli_query($conn, "INSERT INTO planBdb(email ,conf pass, pass) VALUES('" . $_POST['exampleInputIcon4'] . "', '" . $_POST['cppass'] . "', '" . md5($_POST['exampleInputPassword7']) . "')");
echo "User registration form with captcha validation has been successfully saved";
}
}
