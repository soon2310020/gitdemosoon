<?php
session_start();
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['success'] = 'Auto login';
    header('Location: login_success.php');
    exit();
}
if(isset($_SESSION['error']))
{
    $error=$_SESSION['error'];
    unset($_SESSION['error']);
    echo "<span style='color: red'>$error</span><br>";
}
if(isset($_SESSION['success']))
{
    $success =$_SESSION['success'];
    unset($_SESSION['success']);
    echo "<span style='color: blue'>$success</span><br>";
}
if(isset($_SESSION['username']))
{
    $_SESSION['success']="bạn đã đăng nhập rồi logout màn hình để vào login form";
    header("location:login_success.php");
    exit();
}
$res = "";
$err = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = strtolower($username);
    if (empty($username || $password)) {
        $err = "hãy nhập đầy đủ username và password";
    } else {
        if ($username == "admin" && $password == 123456) {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "đăng nhập thành công";
            if(isset($_POST['remember_me']))
            {

                setcookie('username', $username, time() + 60);
                setcookie('password', $password, time() + 60);
            }
            header("location:login_success.php");
            exit();
        }
        else
        {
            $err="sai tên đăng nhập hoặc mật khẩu";
        }
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap.min.css'>

</head>
<body>
<div class="container" style="background: #B6E0FF; max-width:400px;">

    <form action="" method="post">
        <div class="form-group">
            <span style="color: red"><?php echo $err;?></span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">username:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me" value="1">
            <label class="form-check-label" for="exampleCheck1">rememberme</label>
        </div>
        <button type="submit" class="btn btn-primary" value="login" name="login"
                style="background: #65C370 ; margin: auto; display: block ">login
        </button>
    </form>
</div>
</body>
</html>


