<?php
require_once 'database.php';
//hiển thị dưới dạng html
//tạo câu truy vấn lấy giữ liệu
$sql_select_all="select * from categories order by id desc ";
$result_all=mysqli_query($connection,$sql_select_all);
//+lấy mảng kết hợp giựa vào đối tượng trung gian
$categories =mysqli_fetch_all($result_all,MYSQLI_ASSOC);
//echo "<pre>";
//print_r($category);
//echo "</pre>";


?>
<!--khi gọi ajax với kiểu data type= text thì php hiển thị gì thì đó chính là kết quả trả về của ajax-->
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>name</th>
    </tr>
    <?php foreach ($categories as $category):?>
    <tr>
        <td><?php echo $category['id']?></td>
        <td><?php echo $category['name']?></td>
    </tr>
    <?php endforeach; ?>
</table>