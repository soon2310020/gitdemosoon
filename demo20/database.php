<?php
/**
 * Created by PhpStorm.
 * User: soon231020
 * Date: 7/25/2020
 * Time: 8:13 PM
 */
const  DB_HOST = 'localhost';
const  DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'php0520e_crud';
const DB_PORT = 3306;
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if (!$connection) {
    die('error: ' . mysqli_connect_error());

}
//echo "<h2 style='color: blue'>kết nối thành công</h2>";
//khái niệm ajax tạo ra các trâng web theo cơ chế không đồng bộ php thuần về cơ bản
// hoạt dộng trên cơ chế đồng bộ chức năng nào gọi trc chạy trc chức năng sau nó
// phải chờ chức năng trc chạy ms dc chạy
//như vậy đồng bộ là chức năng phía sau vẫn chạy xong trc cả chức năng phía trc
//ajax - asynchronous javascript and xml do dùng js nên có thể tương tác dữ liệu mả không cần tải lại trang
//+ajax có cơ chế tương tác vs framwork của js như nodejs , angular , react ...
//với web sử dụng php nên dùng jquery để gọi ajax thay vì dùng js thuần
//vì tính dễ dùng của jquery
//demo L tạo mới chức năng thêm mới categories không cần xử lý form



?>

