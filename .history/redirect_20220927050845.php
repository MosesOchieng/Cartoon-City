<?php
session_start();
if(isset($_SESSION['user_login_id']) =="") {
header("Location: login.php");
}
// redirect.php
header("Location:refrechdashboard/template/index.html");
exit();
?>