<?php
session_start();
require_once 'database.php';

//create.php form thêm mới danh mục
//index.php liệt kê danh mục
//update.php cập nhập dah mục
//delete.php xóa danh mục
//database.php chứa thông tin kết nối tới csdl
//tạo câu truy vấn lấy dữ liệu từ bảng
$sql_select_all = "select * from categories order by `id` desc ";
//+thực thi truy vấn với select sẽ trả về dữ liệu trung gian nào đó không phải như insert ,update ,delete
$result_all = mysqli_query($conection, $sql_select_all);
//lấy dữ liệu của mảng trung gian thành mảng kết hợp
$categories = mysqli_fetch_all($result_all, MYSQLI_ASSOC);
?>
<?php
if (isset($_SESSION['success']))
{
    $success = $_SESSION['success'];
    echo "<h2 style='color: green'> $success</h2>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['error']))
{
    $success = $_SESSION['error'];
    echo "<h2 style='color: green'> $success</h2>";
    unset($_SESSION['error']);
}
?>

?>
<a href="create.php">thêm mới</a>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>avatar</th>
        <th>created_at</th>
        <!--        khai báo cột rỗng để chứa các chức năng như chi tiết update delete bản ghi-->
        <th></th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?Php echo $category['id'] ?></td>
            <td><?Php echo $category['name'] ?></td>
            <td><?Php echo $category['description'] ?></td>
            <td>
                <img src="uploads/<?Php echo $category['avatar'] ?>" height="80"/>
            </td>
            <td>
                <?Php echo date('d/m/Y - H:i:s',strtotime($category['created_at']) )?></td>
            <td>
<!--                khi update và delete thì cần biết đang thao tác trên fid nào mêm cần phải truyền id lên url -->
                <a href="update.php?id=<?php echo $category['id']?>">update</a>
                <a href="delete.php?id=<?php echo $category['id']?>" onclick="return confirm('có muốn xóa hay không?')">delete</a>
                <a href="#">view</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
