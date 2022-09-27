<?php
session_start();
if(isset($_SESSION['user_login_id']) =="") {
header("Location: login.php");
}
// redirect.php
header("Location:refreshdashboard/template/index.html");
exit();
?>