<?php
session_start();
//tìm hiểu cơ bản về khái niệm session ứng dụng trong thực tế
//ứng dụng diển hình cho cơ chế session là chức năng đăng nhập , giỏ hàng
//1- khái niệm : hiểu đơn giản như 1 phiên làm việc trên web nếu close trình duyệt thì sau vào lại sẽ mất các thông tin ví dụ như
//thông tin đăng nhập và thông tin giỏ hàng....
//2- đặc điểm :
//+ giá trị được lưu trong session có thể được truy cập lại bất cứ nơi nào trong hệ thống
//VD: ở file A.php khai báo giá trị bằng 1 session thì ở các file B,C hoàn toàn có thể truy cập và sử dụng biến session ở file B
$a = 5;
//+ với php cũng đã tạo sẵn 1 biến toàn  cục lưu tất cả các thông tin liên quan đến session trên hệ thống là mảng $_SESSION
//đây là mảng kết hợp key của mảng là ở dạng string
//thử debug để xem thông tin session đang có trong hệ thống
echo "<pre>";
print_r($_SESSION);
echo "<pre>";
//3 khở tạo session
// sesion phải được đăng ký thì mới cho phép file hiện tại thao tác với biến $_SESSIOn sử dụng hàm
//session_start()
// khai báo hàm này trên đầu file
//4 thêm dữ liệu cho session : bản chất là thêm phần tử cho mảng
//thêm phần tử bằng key=name , giá trị sơn cho mảng
$_SESSION['name'] = 'sơn';
$_SESSION['infor'] =
    [
        'name' => 'sơn',
        'age' => 19
    ];
// lấy giá trị của sesion bản chất vẫn là lấy giá trị theo key của mảng
echo $_SESSION['name'];
print_r($_SESSION['infor']);
//thao tác ở file khác
$test = 'test';
echo $test;
//6 thao tác xóa sesion : bản chất xóa session la xóa phần tử theo key của mảng
// sử dụng hàm unset để xóa phần tử của session
unset($_SESSION['name']);
echo "<pre>";
print_r($_SESSION);
echo "<pre>";
session_destroy();
//tuy nhiên nên xxoas thủ công cascc session do bạn tạo ra không nên xóa toàn bộ session nếu bạn không kiểm xoát được phạm vi ảnh hưởng của session đó

echo "<pre>";
print_r($_SESSION);
echo "<pre>";
?>