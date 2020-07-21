<?php
session_start();

// nếu tồn tại các cookie đăng nhập thì sẽ chuyển hướng luôn
if
if (isset($_SESSION['username'])) {
    $_SESSION['success'] = 'bạn đã đăng nhập rồi';
    header("location:success.php");
    exit();
}
//sẽ có trường hơp user đã login thành công nhừn cân truy cập lại được trang login thì lại không hợp lí
//login.php
//tạo 1 thư mục như sau
//login.php xử lý form login
//success.php hiwwnr thị thông tin user login thành công
//bài toán như sau nhập user name password check user name khác rỗng và mật khẩu lớn hơn 3 kí tự thì đăng nhập thành công , ngược lại là sai tài khoản hoặc mật khẩu
$err = '';
$res = '';
echo "<pre>";
print_r($_POST);
echo "</pre>";
//3 nếu user submit form thì mới xử lý
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
//    chưa xử lý ghi nhớ đăng nhập chỉ xử lý khi đăng nhập thành công
//    4 xử lý validate form
//    user name không được để trống và phải có định dajg email
    if (empty($username) || empty($password)) {
        $err = 'user name hoặc pass bị chống';

    } elseif (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $err = 'user name không có dạng email';
    }
//    5 = xử lý không có lỗ
    if (empty($err)) {
//         điều kiện đăng nhập thành công là user name khác rỗng và pass có độ dài >3
        if (strlen($password) >= 3) {
//          khi thành công hiển thị user name vừa đăng nhập kèm theo thông báo thành công
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "đăng nhập thành công";
//                sử dụng hàm chuyển hướng tới url khascc header()
//            hàm này luôn có từ khóa cố định là location :, theo sau là url
            header("Location: success.php");
            exit();
            if (isset($_SESSION['remember_me'])) {

            }
        } else {
            $err = ' lỗi mật khẩu';
        }
    }
}
$error = '';
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];


}
if (isset($_SESSION['success'])) {
    $session_success = "đăng xuất thành công";
    echo "<h3 style='color: blue'>$session_success</h3>";
    echo "   <h3 style='color: red'> $session_success</h3>";
    unset($_SESSION['success']);

}
?>

<h3 style="color: red"> <?php echo $err; ?></h3>
<form action="" method="post">
    user name:
    <input type="text" name="username" value="">
    <br>
    password:
    <input type="password" name="password"> <br>
    <input type="checkbox" name="remember_me" value="1">
    remember me
    <br> <input type="submit" name="login" value="đăng nhập">
</form>
