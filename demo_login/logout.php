<?php
session_start();
//xử lý đăng xuất khỏi hệ thồng
// xử lý xóa hết liên quan đến login
unset($_SESSION['username']);
header("location: login.php")

?>