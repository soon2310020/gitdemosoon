<?php
//chú ý về cách đặt thuộc tính name cho các input
//với các input chỉ cho phép nhập chọn 1 giá trị tại 1 thời điểm thì name có dạng text đơn vd type ='text' ...vv
//select ở dạng chọn 1, password, textarea
//với các input cho phép chọn nhiều giá trị tại 1 thời điểm
//thì cần khai báo name ở dạng mảng  vd: checkbox , select multiple hoặc file
//vd : name ='job[]'
//phương thức get post trong form
//get
//truyền hết giá trị lên url , các tham số truyền lên sẽ cách nhau bởi kí tự &
//url sử dụng biểu thức get nó sẽ giới hạn độ dài kí tự =1024
//về mặt lập trình php đã ra sẵn các biến toàn cục chứa tất cả dữ liệu trên form $get
//cái này có kiểu dữ liệu mảng
//post sẽ bảo mật hơn get không sử dụng get cho các form có dữ liệu nhạy cảm  vd password banking vv
// về mặt lập trình php cx đã tạo ra 1 biến $_post chứa tất cả các dữ liệu từ form sử dụng
// biến $_REQUEST ĐÂY là biến tạo sẵn chứa các thông tin về $_GET , $_POST, $_COOKIE
//có thể dùng $_REQUEST THAY CHO $_GET VÀ $_POST tuy nhiên k được khuyến khích
//biến $_SERVER CHỨA CÁC THÔNG TIN VỀ MÁY CHỦ CỦA BẠN
//  debug thông tin biến $_SERVER
ECHO "<PRE>";
print_r($_SERVER);
ECHO "<PRE>";
?>
<!--thường thì action để rỗng tức là chính file mà khai báo xử lí luôn-->
<form action="" method="get" >
    username:
<input type="text" name="username" value=""/>
    <br/>
    age:
    <input type="number" name="age" value=""/> <br/>
    email:
    <input type="email" name="email" value=""/>
    <br/>
    gender:
<!--    với radio chỉ chọn dc giá trị tại 1 thời điểm -->
    <input type="radio" name="gender" value="0"> female
    <input type="radio" name="gender" value="1"> male
    <br/>
    note:
    <textarea name="note" rows="5" cols="20"></textarea>
    <br>
    country:
    <select name="country">
        <option value="0">việt nam</option>
        <option value="1">japan</option>
    </select>
    <br>
    <select multiple name="country_mul[]">
        <option value="0">việt nam</option>
        <option value="1">japan</option>
        <option value="2">japan2</option>
    </select>
    <br>
    jobs:
    <input type="checkbox" name="jobs[]" value="0"> job0
    <input type="checkbox" name="jobs[]" value="1"> job1
    <input type="checkbox" name="jobs[]" value=2"> job2
    <input type="checkbox" name="jobs[]" value="3"> job3
    <br>
    avatar
<!--    chọn file ở chế độ upload thì chỉ dc 1 file thì name là text neesi input type = file thì thuộc tính valiew sex k có ý nghĩa
-->
    <input type="file" name="avatar">
    <br>
    <input type="file" name="avatar_mul[]" multiple >
    <br>
<!--    luôn khai báo name cho submit ddeer php biết submit ở chức năng nào-->
    <input type="submit" name="submit" value="send">

</form>
