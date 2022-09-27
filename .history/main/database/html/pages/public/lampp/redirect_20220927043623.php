<?php
session_start();
require_once "connection.php";
if(isset($_SESSION['j
    header("Location:");
}
if (isset($_POST['login'])) {
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}  
$result = mysqli_query($conn, "SELECT * FROM planBdb WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
if(!empty($result)){
if ($row = mysqli_fetch_array($result)) {
$_SESSION['id'] = $row['uid'];
$_SESSION['exampleInputIcon3'] = $row['email'];
$_SESSION['exampleInputPassword6'] = $row['pass'];
header("Location: ../pages/html/database/main/dashboard/template/index.html");
} 
}else {
$error_message = "Incorrect Email or Password!!!";
}
}
if(isset($_SESSION['user_login_id']) =="") {
header("Location: login.php");
}
// redirect.php
exit();
?>