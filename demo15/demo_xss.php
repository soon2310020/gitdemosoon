<?php
//
if(isset($_POST['name']))
{
    alert(document.cookie);
    $name =$_POST['name'];
//
    $name =htmlspecialchars($name);
    echo "tên của bạn:$name";
//nếu nhập ra mà ra alert thì form của bạn bị tấn công sử dụng hàm sau để hiển thị dữ liệi
//    mà user nhập từ form

}
?>
<form action="" method="post" >
    <input type="text" name="name">
    <input type="submit" name="submit" value="text xss">
</form>
