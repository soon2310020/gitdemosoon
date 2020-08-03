<?php
/**
 * model-view-controller :là mô hình kiến trúc phần mềm , bao hoofm 3 lớp model ,view ,controller
 * mvc rất phổ biến trong các framework và cms của php
 * mvc tách ứng dụng web làm 3 lớp khiến cho việc quản lí và bảo trì dễ dàng hơn
 * mvc khá khó tiếp cận với các bạn mới , do sử dụng oop làm nền tảng để xây dựng
 * 2- thành phần của MVC
 * +M-model :chứa các class chỉ dùng để tương tác với csdl
 * +v-view :chứa các file php chỉ dùng để hiển thị dữ liệu tới user
 * +c-controller: tầng trung gian luân chuyển dữ liệu giữa model và view
 * 3- luồng xử lí dữ liệu MVC
 * 4-cấu trúc thư mục code của mô hình MVC trong khóa học
 * +do mô hignh MVC có nhiều cấu trúc chương trình nên có nhiều thư mục code khác nhau
 * +demo tạo cấu trúc thư mục MVC
 * MVC_demo/
 *         /index.php:đây là file gốc của ứng dụng bất cứ mô hình MVC nào cx có 1 file có tên là index file này nhận tất cả các yêu cầu gửi lên từ user
 *                    phân tích để gọi controller tương ứng xử lý
 *         /.htaccess: chứa các rule cho việc rewrite URL - viết lại các đường dẫn đẹp
 *         /assets: sẽ chứa các thư mục /file liên quan tới frontend
 *                 /css: chứa các file css
 *                      /style.css :file chính của css
 *                 /js:chứa các file js
 *                    /script.js
 *                 /images:chứa các ảnh của ứng dụng
 *                 /fonts
 *                 /webfonts
 *        /configs: chứa các class cấu hình hệ thống như DB,system
 *                 /database.php: class chứa hằng số kết nối csdl
 *                              tên class thường trùng với tên file viết hoa từ đầu tiên của từng từ
 *        /controller :chứa các class controller của ứng dụng
 *                    /CategoryController.php class quản lý
 *                       category ,với mỗi mô hình MVC thì class là controller bắt buoojv phải có từ controller phía sau
 *         /models:chứa cascc model của ứng dụng
 *                 /category.php class model của category
 *          /views:chứa các mục view theo chức năng
 *                /categories: thư mục chứa các view của quản lý category
 *                            /index.php
 *                             /create.php
 *                             /update.php cập nhập
 *                             /detail.php chi tiết
 *                /layouts:chứa các file layout của hệ thống
 *                         /header.php :file header của ứng dụng
 *                          /foooter.php: file footer của ứng dụng
 *                          /main.php :file layout chính nhúng header và footer vào
 *
 *
 */
?>