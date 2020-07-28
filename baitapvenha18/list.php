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
if (!isset($_SESSION['success']))
{
$_SESSION['success']="";

}
if (!isset($_SESSION['error']))
{
    $_SESSION['error']="";
}
$ss = $_SESSION['success'];
unset($_SESSION['success']);
echo "<h6 style='color: #1c7430'>$ss</h6>";
$error =$_SESSION['error'];
unset($_SESSION['error']);
echo "<h6 style='color: red'>$error</h6>";
$select_all = "select * from employees";
$select_all_res = mysqli_query($conection, $select_all);
$employees = mysqli_fetch_all($select_all_res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap.min.css'>
    <link rel="stylesheet" href="css/all.min.css"/>

    <script src='main.js'></script>
</head>
<body>

<div class="container">
    <div style="display: flex">
        <h2>employees list</h2>
        <a class="btn btn-primary" href="bai1.php" role="button" style="background: #5CB85C; margin:10px 0px 10px 65%">+
            add new employee</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">salary</th>
            <th scope="col">gender</th>
            <th scope="col">birthday</th>
            <th scope="col">created_at</th>
            <th scope="col">action</th>
        </tr>
        <?php foreach ($employees as $employee): ?>
            <tr>

                <td><?php echo $employee['id'] ?></td>
                <td><?php echo $employee['name'] ?></td>
                <td><?php echo $employee['description'] ?></td>
                <td><?php echo $employee['salary'] ?></td>
                <td><?php echo $employee['gender'] ?></td>
                <td><?php echo $employee['birthday'] ?></td>
                <td ><?php echo $employee['created_at'] ?></td>
                <td style="letter-spacing: 5px; ">
                    <a href="view.php?id=<?php echo $employee['id'] ?>" style="color: white; text-decoration: none"> <i class="far fa-eye"></i></a>
                    <a href="update.php?id=<?php echo $employee['id'] ?>" style="color: white; text-decoration: none" > <i class="fas fa-pen" ></i></a>
                    <a href="delete.php?id=<?php echo $employee['id'] ?>" style="color: white; text-decoration: none" onclick=" return confirm('bạn có muốn xóa không?');"><i class="fas fa-trash-alt" ></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </thead>
    </table>
</div>
</body>
</html>
