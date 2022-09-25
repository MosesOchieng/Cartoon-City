<?php
session_start();
require_once ("public/lampp/connection.php");
if(isset($_SESSION['id'])!="") {
    header("Location:public/lampp/redirect.php");
}
if (isset($_POST['signup'])) {

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
// import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

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
$email = $_POST['exampleInputIcon4'];
$password = $_POST['exampleInputPassword7'];
mysqli_query($conn, "INSERT INTO planBdb(email ,conf pass, pass) VALUES('" . $_POST['email'] . "', '" . $_POST['cppass'] . "', '" . md5($_POST['exampleInputPassword7']) . "')");
echo "User registration form with captcha validation has been successfully saved";
}
}$row= mysqli_num_rows($result);
if($row < 1)
{}
$token = md5($_POST['email']).rand(10,9999);
mysqli_query($conn, "INSERT INTO planBdb(name, email, email_verification_link ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $token . "', '" . md5($_POST['password']) . "')");
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.dreamhost.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contact@example.com';             // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable SSL encryption, TLS also accepted with port 465
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('contact@example.com', 'Mailer');          //This is the email your form sends From
    $mail->addAddress('recipient@dreamhost.com', 'Joe User'); // Add a recipient address
    //$mail->addAddress('contact@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Subject line goes here';
    $mail->Body    = 'Body text goes here';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>