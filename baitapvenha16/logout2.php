<?php
session_start();
setcookie('username',1,time()-1);
setcookie('password',1,time()-1);
unset($_SESSION['username']);
unset($_SESSION['success']);
//unset($_SESSION['error']);
$_SESSION['success']="bạn đã đăng xuất thành công";
header("location:login2.php");
exit();
?>