<?php
session_start();
if(isset($_SESSION['user_login_id']) =="") {
header("Location: login.php");
}
// redirect.php
header("Location: ../public/pages/html/database/main/dashboard/index.html");
exit();
?>