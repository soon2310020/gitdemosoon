<?php
//demo_khái niệm và thao tác căn bản với cookie
//1- khái niệm
//cookie dùng để lưu trữ thôn tin như seesion và biến thông thườn
//cookie thường dùng cho việc quảng cáo và tăng tốc đô truy cập trang và cho lần sau bạn truy cập lại sẽ nhanh hơn , ghi nhớ mật khẩu
//+cookie không bị mất đi khi đóng trình duyệt do cookie lưu trên trình duyệt còn session lư thông tin trên server
//cookie sẽ khoong bảo mật bằng sesion bất cứ ai cũng có thể xem được , tuy nhiên với session thì không
//mảng $_COOKIE ;à mảng kết hợp
//2- các thao tác với cookie
//debug để xem thông tin mảng $_COOkIE
//cookie không cần khởi tjao nhiw session tr
echo "<pre>";
print_r($_COOKIE);
echo "<pre>";
//khởi tạo cookie, thêm phần tử cho cookie , chú ý :không áp dụng kiểu thêm phần tử cho mảng để cho cookie
// phải sử dụng hàm setcookie để làm điều này
//truyền vào 3 tham số
//1 tên cookie
//giá trị tương ứng
// thời gian sống
setcookie('username','tcsooon',time()+300);
//lấy giá trị thì giống như thao tác với mảng
if(isset($_COOKIE['username']))
echo $_COOKIE['username'];
//do session và cookie đều là mảng nên chắc chắn trc khi hiển thị ra giá trị tương ứng của mảng thì cẩn sử dụng
//hàm isset
setcookie('username','',time()-1);
//điểm giống nhau và khác nhau giữa sesion và cookie
//giống nhau : đều để lưu thông tin của biến
//khác nhau :
//session sẽ mất đi khi khởi động trình duyệt còn cookie thì k
//sesion chạy trên server còn cookie chạy trên trình duệt
?>