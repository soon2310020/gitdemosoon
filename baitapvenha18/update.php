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
$id=$_GET['id'];
$sql_update="update employees set"
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

<div class="container">

    <h1>creat record</h1>
    <form action="" method="post">
        <div class="form-group">

            <label for="formGroupExampleInput">name</label>
            <input type="text" id="formGroupExampleInput" class="form-control" name="name">
        </div>
        <div class="form-group">

            <label for="formGroupExampleInput">description</label>
            <textarea class="form-control" cols="3" name="description"></textarea>
        </div>
        <div class="form-group">

            <label for="formGroupExampleInput">salary</label>
            <input type="text" id="formGroupExampleInput" class="form-control" name="salary">
        </div>
        <div class="form-group">
            <div class="form-group">gender</div>
            <div class="custom-control custom-radio custom-control-inline">

                <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="0">
                <label class="custom-control-label" for="customRadioInline1">male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="1">
                <label class="custom-control-label" for="customRadioInline2">female</label>
            </div>
        </div>
        <div class="form-group">

            <label for="formGroupExampleInput">birthday</label>
            <input type="text" id="formGroupExampleInput" class="form-control" placeholder="mm/dd/yy" name="birthday">
        </div>
        <button type="submit" class="btn btn-primary" name='save' value="save">Save</button>
        <button type="button" class="btn btn-light">cancel</button>
    </form>
</div>
</body>
</html>
