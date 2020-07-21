<?php
session_start();

//để tránh trường hợp truy cập mà chưa đăng nhập bằng cách nếu không tồn tại mảng seesion thì sẽ chuyển hướng về trang login
if (!isset($_SESSION['username'])) {
    $_SESSION['error']='bạn chưa đăng nhập';
    header("location: login.php");
    exit();
}


    $username = $_SESSION['username'];
$success=$_SESSION['success'];
    echo "<h1>$success</h1>";
    echo "<br> chào bạn $username";


?>
<a href="logout.php">logout</a>
