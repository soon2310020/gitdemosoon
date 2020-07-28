<?php
session_start();
const  DB_HOST = 'localhost';
//khai báo username để kết nối vào csdl
//mặc định username = root
const  DB_USERNAME = 'root';
//khai báo hằng password để kết nối csdl
// mật khẩu mặc định khi cài xampp là giá trị rỗng
const DB_PASSWORD = '';
//khai báo tên csdl muốn kết nối
const DB_NAME = 'baitap1';
//khai báo rằng csdl sẽ kết nối qua cổng
const DB_port = 3306;
$conection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!isset($_GET['id'])||is_nan($_GET['id']))
{
    $_SESSION['error']="id bị sai";
    header("location:list.php");
    exit();
}
$id =$_GET['id'];
$sql_delete ="delete from employees where id=$id ";
$is_delete =mysqli_query($conection,$sql_delete);
if ($is_delete)
{
    $_SESSION['success']="xóa id =$id thành công ";
}
else
{
    $_SESSION['error']="xóa id = $id thất bại";
}
header("location:list.php");
exit();
?>