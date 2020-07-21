<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['success']);
$_SESSION['success']="đăng xuất thành công";
header("location: login1.php");
?>