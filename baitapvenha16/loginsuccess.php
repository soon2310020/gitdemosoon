<?php
session_start();
if (isset($_SESSION['username'])) {
    $username =$_SESSION['username'];
    $success = $_SESSION['success'];
    unset($_SESSION['success']);
    echo "<span style='color: chartreuse'>$success</span><br>";
    echo "<span style='color: blue'>chúc mừng $username đăng nhập thành công</span>";
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    $_SESSION['err'] = "bạn chưa đăng nhập không thể truy cập";
    header("location:login1.php");
    exit();

}
?>