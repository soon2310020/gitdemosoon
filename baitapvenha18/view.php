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
$sql_select_one ="select * from employees where  id =$id";
$res_one = mysqli_query($conection,$sql_select_one);
$category =mysqli_fetch_assoc($res_one);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap.min.css'>
    <script src='main.js'></script>
</head>
<body>
<div class="container">
<h1>view record</h1>
<form>
    <div class="form-group">
        <label for="formGroupExampleInput">id</label>
      <div class="form-control" style="border: 0"><?php echo $category['id'] ?></div>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">name</label>
        <div class="form-control" style="border: 0"><?php echo $category['name'] ?></div>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">description</label>
        <div class="form-control" style="border: 0"><?php echo $category['description'] ?></div>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">salary</label>
        <div class="form-control" style="border: 0"><?php echo $category['salary'] ?></div>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">birthday</label>
        <div class="form-control" style="border: 0"><?php echo $category['birthday'] ?></div>
    </div>
</form>
</div>
</body>
</html>
