<?php
require_once 'database.php';
echo "<pre>";
print_r($_POST);
echo "</pre>";
//gán biến
$name = $_POST['name'];
$description =$_POST['description'];
$sql_insert ="insert into categories (`name`,`description`)values ('$name','$description')";
$is_insert =mysqli_query($connection,$sql_insert);
//dữ liệu json kiểu dữ liệu thường dung cho các nền tảng khác nhau
echo $is_insert;
?>