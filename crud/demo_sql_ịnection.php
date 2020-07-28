<?php
//là kĩ thuật tấn công vào csdl thông qua các lỗ hổng bảo mật chủ yếu qua form để thay đổi câu truy vấn của bạn
//với cách truy vấn csdl từ trc đến giờ thì đều đang bị dính lỗi bảo mật này
//demo dựng 1 form cho phép tìm kiếm tương đôi danh mục qua tên danh muc
require_once 'database.php';
$err = "";
if (isset($_GET['submit'])) {
    $name =$_GET['name'];
    $name = mysqli_real_escape_string($conection,$name);
//    tạo câu truy vấn dựa theo name
    $sql_select_all="select * from categories where `name` like '%$name%'";

    $res_all=mysqli_query($conection,$sql_select_all);
    $catigories= mysqli_fetch_all($res_all,MYSQLI_ASSOC);
    echo "<pre>";
    print_r($catigories);
    echo "</pre>";
//    123456' or `name` != '
//    nếu show hết form của bạn đang bị dính lỗi bảo mật sql
//    can thiệp vào bước nhập giá trị ng dùng sử dụng hàm
//    mysqli_real_escape_string() để chống inrejection

}
?>
<form action="" method="get">
    nhập tên
    <input type="text" name="name" value="">
    <br/>
    <input type="submit" name="submit" value="tìm kiếm">

</form>
