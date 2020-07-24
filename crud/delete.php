<?php
session_start();
require_once 'database.php';
//thực hiện xóa bản ghi dựa theo id truyền trên url
//do truyền tham số trên url có thể dùng phương thức get để lấy giá trị của tham số đó thông qua phương thức $_GET
//do các tham số trên url thì user có thể sửa được do đó phải validate cho tham số
//nếu không tồn tại tham số id hoặc tồn tại rồi nhưng giá trị không phải số thì chuyển hướng về trang danh sách

if (!isset($_GET['id'])||is_nan($_GET['id']))
{
    $_SESSION['error']="ID không hợp lệ";
    header('location:index.php');
    exit();
}
$id =$_GET['id'];
//tạo câu truy vấn
$sql_delete ="delete from categories where id =$id";
//thực thi câu truy vấn
$is_delete =mysqli_query($conection,$sql_delete);
//var_dump($is_delete);
if ($is_delete)
{
    $_SESSION['success']="xóa bản ghi id =$id thành công";

}
else
{
    $_SESSION['error']="xóa bản ghi id =$id thất bại";
}
header('location:index.php');
exit();
?>