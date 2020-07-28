<?php
session_start();
require_once 'database.php';
////thực hiện hiển thị một form chứa các thông tin mặc định cho bản ghi
////về mặt cấu trúc form giống hệt form của chức năng thêm mới
////các bước ta thực hiện để xử lý update
////1- truy cập csdl để lấy ra bản ghi tương ứn dựa vào id baawsy rừ url
////hiển thị các giá trị lấy được ra các input thông qua thuộc tính value
////2- xử lý submit form khi user ấn vào nút cập nhập
////về cơ bản thì nó sẽ giống hệt như việc xử lý form khác mỗi ở việc upload file, trong trường hợp bản ghi đã tồn tại avatar khi m
////user không up đè ảnh  -> giuex nguyên ảnh cũ
////user up đè ảnh upload như thường xóa ảnh cũ đi ,dùng hàm unlink()
//if (!isset($_GET['id']) || is_nan($_GET['id'])) {
//    $_SESSION['error'] = "ID không hợp lệ";
//    header('location:index.php');
//    exit();
//}
//
//$id = $_GET['id'];
//$sql_select_one = "select * from categories where id=$id";
//
//$result = mysqli_query($conection, $sql_select_one);
//
//$category = mysqli_fetch_assoc($result);
//$err = "";
//if (isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $description = $_POST['description'];
//    $avatar_arr = $_FILES['avatar'];
//    if (empty($name)) {
//        $err = 'name không được để trống';
//    } else if ($avatar_arr['error'] == 0) {
////        xử lý file upload phải có dạng ảnh
////
//        $extension = pathinfo($avatar_arr['name'], PATHINFO_EXTENSION);
////        var_dump($extension);
//        $extension = strtolower($extension);
//        $extension_allowed = ['jpg', 'jpeg', 'png', 'gif'];
//        if ((!in_array($extension, $extension_allowed))) {
//            $err = 'file upload phải có định dạng ảnh';
//
//        }
////        xử lý lấy dung lượng file tải lên theo mb
//        $file_size = round($avatar_arr['size'] / 1024 / 1024, 3);
//        if ($file_size > 2) {
//            $err = 'file không được vượt quá 2MB';
//        }
//    }
//    if (empty($err)) {
//
//
//        if ($avatar_arr['error'] == 0) {
//            $avatar = $category['avatar'];
//            $dir_uploads = 'uploads';
//            unlink("$dir_uploads/$avatar");
//
//            move_uploaded_file($avatar_arr['tmp_name'], $dir_uploads . '/' . $avatar);
//            $sql_update = "update categories set `name`='$name' ,`description`='$description', where id=$id";
//            $is_update = mysqli_query($conection, $sql_update);
//        } else {
//            $sql_update = "update categories set `name`='$name' ,`description`='$description' where id=$id";
//            $is_update = mysqli_query($conection, $sql_update);
//        }
//        if ($is_update) {
//            $_SESSION['success'] = "update id=$id thành công ";
//        } else {
//            $_SESSION['error'] = "update id=$id thất bại ";
//        }
//        header("location:index.php");
//        exit();
//    }
//
//}
//lấy dữ liệu trong trình duyệt
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = "id không hợp lệ ";
    header('location:index.php');
    exit();
}
$id = $_GET['id'];
//lấy danh mục theo id
//tạo câu truy vấn
$sql_select_one = "select * from categories where id =$id";
//thực thi truy vấn
$res_one = mysqli_query($conection, $sql_select_one);
//lấy dữ liệu dưới dạng mảng
$category = mysqli_fetch_assoc($res_one);
//echo "<pre>";
//print_r($category);
//echo "</pre>>";
if (empty($category)) {
    echo "bản ghi với id =$id không tồn tại";
    return;
}
// xử lý form coppy sử lý form từ create
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
        $avatar = $category['avatar'];
//    xử lý upload nếu user có tải file lên
        if ($avatar_arr['error'] == 0) {
//    xóa file ảnh cũ đi để tránh rác hệ thốnh
            unlink("uploads/$avatar");
        }
//        tạo thư mục upload theo đường dẫn tương đối
        $dir_uploads = 'uploads';

//        tạo thư mục chỉ khi thư mục chưa tồn tại
        if (!file_exists($dir_uploads)) {
            mkdir($dir_uploads);
        }
//            tạo ra tên file mang tính duy nhất ghi đè file khi user upload nhiều lần cùng 1 tên
//            chuyển file upload từ thư mục tạm đến thư mục đích
        move_uploaded_file($avatar_arr['tmp_name'], $dir_uploads . '/' . $avatar);
    }
//        xử lý lưu thông tin  vào bảng categories
    $sql_update = "update categories set `name`='$name',`description`='$description',`avatar`='$avatar' where id =$id";
    $is_update = mysqli_query($conection, $sql_update);
    if ($is_update) {
        $_SESSION['success'] = "update id=$id thành công ";
    } else {
        $_SESSION['error'] = "update id=$id thất bại ";
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
<h3 style="color: red"><?php echo $err ?></h3>
<form action="" method="post" enctype="multipart/form-data">
    nhập tên danh mục :
    <input type="text" name="name" value="<?Php echo $category['name'] ?>">
    <br>
    nhập mô tả:
    <textarea name="description" cols="15"><?Php echo $category['description'] ?></textarea>
    <br>
    tải ảnh đại diện
    <input type="file" name="avatar" value="<?Php echo $category['avatar'] ?>"/>
    <img src="uploads/<?php echo $category['avatar'] ?>" height="80px">
    <br>
    <input type="submit" name="submit" value="update">1
    <input type="reset" value="reset">
</form>
</body>
</html>
