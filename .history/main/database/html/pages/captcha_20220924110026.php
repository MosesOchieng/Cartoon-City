<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require '/home/username/PHPMailer/src/SMTP.php';

if(isset($_POST['submit']) && $_POST['g-recaptcha-response']!="")
{
require_once "up.php";

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
}$row= mysqli_num_rows($result);
if($row < 1)
{
$token = md5($_POST['email']).rand(10,9999);
mysqli_query($conn, "INSERT INTO planBdb(name, email, email_verification_link ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $token . "', '" . md5($_POST['password']) . "')");
$link = "<a href='localhost/email-verification/verify-email.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";
require_once('phpmail/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
// enable SMTP authentication
$mail->SMTPAuth = true;                  
// GMAIL username
$mail->Username = "your_email_id@gmail.com";
// GMAIL password
$mail->Password = "your_gmail_password";
$mail->SMTPSecure = "ssl";  
// sets GMAIL as the SMTP server
$mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
$mail->Port = "465";
$mail->From='your_gmail_id@gmail.com';
$mail->FromName='your_name';
$mail->AddAddress('reciever_email_id', 'reciever_name');
$mail->Subject  =  'Reset Password';
$mail->IsHTML(true);
$mail->Body    = 'Click On This Link to Verify Email '.$link.'';
if($mail->Send())
{
echo "Check Your Email box and Click on the email verification link.";
}
else
{
echo "Mail Error - >".$mail->ErrorInfo;
}
}
else
{
echo "You have already registered with us. Check Your email box and verify email.";
}

