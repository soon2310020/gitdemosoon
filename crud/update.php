<?php
session_start();
require_once  'database.php';
//thực hiện hiển thị một form chứa các thông tin mặc định cho bản ghi
//về mặt cấu trúc form giống hệt form của chức năng thêm mới
//các bước ta thực hiện để xử lý update
//1- truy cập csdl để lấy ra bản ghi tương ứn dựa vào id baawsy rừ url
//hiển thị các giá trị lấy được ra các input thông qua thuộc tính value
//2- xử lý submit form khi user ấn vào nút cập nhập
//về cơ bản thì nó sẽ giống hệt như việc xử lý form khác mỗi ở việc upload file, trong trường hợp bản ghi đã tồn tại avatar khi m
//user không up đè ảnh  -> giuex nguyên ảnh cũ
//user up đè ảnh upload như thường xóa ảnh cũ đi ,dùng hàm unlink()

?>