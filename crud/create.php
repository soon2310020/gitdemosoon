<?php
session_start();
//nhúng file để sử dụng biến conecttion
require_once 'database.php';
//hiển thị form thêm mới và xử lý form
//theo như tên gọi crud  các bạn sẽ thực hiện create rồi đến read sau đó là update và delete
//+bảng categories hiện tại đang có các trường  như sau :id,name,description ,avatar, created_at
//xử lý form
$err = '';
//echo "<PRE>";
//print_r($_POST);
//echo "</PRE>";
//echo "<PRE>";
//print_r($_FILES);
//echo "</PRE>";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $avatar_arr = $_FILES['avatar'];
//    xử lý validate form
//    name không được để trống file phải có dạng ảnh vad sung lượng tối đa 2mb
    if (empty($name)) {
        $err = 'name không được để trống';

    } else if ($avatar_arr['error'] == 0) {
//        xử lý file upload phải có dạng ảnh
//
        $extension = pathinfo($avatar_arr['name'], PATHINFO_EXTENSION);
//        var_dump($extension);
        $extension = strtolower($extension);
        $extension_allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if ((!in_array($extension, $extension_allowed))) {
            $err = 'file upload phải có định dạng ảnh';

        }
//        xử lý lấy dung lượng file tải lên theo mb
        $file_size = round($avatar_arr['size'] / 1024 / 1024, 3);
        if ($file_size > 2) {
            $err = 'file không được vượt quá 2MB';
        }
    }
//    xử lý logic form như đề bài trong trường hợp không có lỗi validate nào xảy ra
    if (empty($err)) {
        $avatar = '';
//    xử lý upload nếu user có tải file lên
        if ($avatar_arr['error'] == 0) {
//        tạo thư mục upload theo đường dẫn tương đối
            $dir_uploads = 'uploads';

//        tạo thư mục chỉ khi thư mục chưa tồn tại
            if (!file_exists($dir_uploads)) {
                mkdir($dir_uploads);
            }
//            tạo ra tên file mang tính duy nhất ghi đè file khi user upload nhiều lần cùng 1 tên
            $avatar = time() . '-' . $avatar_arr['name'];
//            chuyển file upload từ thư mục tạm đến thư mục đích
            move_uploaded_file($avatar_arr['tmp_name'], $dir_uploads . '/' . $avatar);
        }
//        xử lý lưu thông tin  vào bảng categories
        $sql_insert="insert into categories (`name`,`description`,`avatar`)
values ('$name','$description','$avatar')";
        $is_insert=mysqli_query($conection,$sql_insert);
//        var_dump($is_insert);
        if ($is_insert)
        {
            $_SESSION['success']='thêm mới danh mục thành công';
            header('location:index.php');
            exit();
        }
        else
        {
            $err='thêm mới thất bại';
        }

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<!--action form thường để rỗng vì chính nơi khai báo form sẽ xử lý form-->
<!--do form có input file nên bắt buộc phương thức là post và phải khai báo enctype-->
<h3 style="color: red"><?php echo $err ?></h3>
<form action="" method="post" enctype="multipart/form-data">
    nhập tên danh mục :
    <input type="text" name="name" value="">
    <br>
    nhập mô tả:
    <textarea name="description" cols="15"></textarea>
    <br>
    tải ảnh đại diện
    <input type="file" name="avatar"/>
    <br>
    <input type="submit" name="submit" value="lưu">
    <input type="reset" value="reset">
</form>
</body>
</html>
