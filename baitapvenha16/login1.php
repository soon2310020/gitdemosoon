<?php
session_start();

if(isset($_SESSION['username']))
{
    $_SESSION['success']="bạn đã đăng nhập rồi";
    header("location:login_success.php");
    exit();
}
if(isset($_SESSION['success']))
{
    $success =$_SESSION['success'];
    unset($_SESSION['success']);
    echo "<span style='color: blue'>$success</span><br>";
}
if(isset($_SESSION['err']))
{
    $error=$_SESSION['err'];
    echo "<span style='color: red'>$error</span>";
    unset($_SESSION['err']);

}
$err = "";
$res = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $err = "không được để trống tên và password";
    } else {
        $username = strtolower($username);
        $password = strtolower($password);

        if ($username == "son" && $password == "123456") {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "đăng nhập thành công";
            header("location: loginsuccess.php");
            exit();
        } else {
            $err = "sai username hoặc mật khẩu";
        }
    }
    echo "<span style='color: red'>$err</span>";
}

?>
<form action="" method="post">
    username:
    <input type="text" placeholder="username" name="username" value="">
    <br>
    password:
    <input type="password" placeholder="password" name="password" value="">
    <br/>
    <input type="submit" value="login" name="login">
</form>
