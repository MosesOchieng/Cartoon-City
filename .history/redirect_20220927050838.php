<?php
session_start();
if(isset($_SESSION['user_login_id']) =="") {
header("Location: login.php");
}
// redirect.pp
header("Location:dashboard/template/index.html");
exit();
?>