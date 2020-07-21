<?php
//thực hành form 2 php
//xử lý form đăng nhập , gồm 2 input nhập username và password
//slide thực hành 2
//1- debug thôn tin biến dựa vào method form
//ECHO "<PRE>";
//print_r($_POST);
//ECHO "</PRE>";
//2 - tạo ra biến chứa lỗi và kết quả
$err='';
$res='';
//3 kiểm tra xem đã submit hay chưa
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
//    4 - xử lý validate form
//    +uswrname password không được để trống emtry()
//    user name phải có định dạng email filter_var()
//    password phải có độ dài >6 kí tự -> dùng hàm strlen()
    if(empty($username)||empty($password))
    {
        $err='name hoặc pass bị trống';
    } elseif (!filter_var($username,FILTER_VALIDATE_EMAIL))
    {
        $err='user name sai định dạng';

    }
    elseif (strlen($password)<6)
    {
        $err='password phải lớn hơn 6 kí tự';
    }
//    5- xử lý logic theo yêu cầu khi mà không có lỗi nào xảy ra
    if (empty($err))
    {
        if ($username=='sont457@gmail.com'&&$password==123456)
        {
            $res='đăng nhập thành công';
        }
        else
        {
            $err='sai tài khoản hoặc mật khẩu';
        }

    }
}

?>
<!--hiển thị biến err và res-->
<h3 style="color: red">
    <?php echo $err; ?>
</h3>
<h3 style="color: blue">
    <?php echo $res; ?>
</h3>
<form action="" method="post">
    username:
    <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username']: '' ?>">
    <br/>
    password:
    <input type="password" name="password" value="">
    <br>
    <input type="submit" name="login" value="đăng nhập">
</form>
