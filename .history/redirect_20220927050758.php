<?php
session_start();
if(isset($_SESSION['user_login_id']) =="") {
header("Location:elogin.php");
}
// redirect.php
header("Location:dashboard/template/index.html");
exit();
?>