<?php
session_start();
if(isset($_SESSION['username']))
{
    $username=$_SESSION['username'];
    $success=$_SESSION['success'];
    echo"<h3 style='color: blue'>$success</h3>";
    echo"<h3 >chào mưng bạn : $username</h3>";
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo"<h3>thời gian hiện tại đang login: ".date('d/m/Y - H:i:s',time())."</h3>";
    echo "<br/><a href='logout2.php'>logout</a>";


}
else
{
    $_SESSION['error']="mày cần đăng nhập để vào trang này ";
    header("location:login2.php");
    exit();
}
?>