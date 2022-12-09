<?php
session_start();
if(isset($_SESSION['user_login_id']) =="") {
headj("Location: login.php");
}
// redirect.php
header("Location:dashboard/template/index.html");

exit();
?>