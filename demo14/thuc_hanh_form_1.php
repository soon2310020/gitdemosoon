<?php
//thực hành form1
//submit form có 1 input nhập tên , 1 nút submit khi click submit thì show ra tên vừa nhập
// quy trình vẫn là html ->css -> js ->php
//code xử lí form sẽ vieest trc html để có thể sử dụng lại các biến 1 cách thuận lợi nhất
//1- debug thông tin nhời $_GET VÀ $_POST
//ECHO "<PRE>";
//print_r($_GET);
//ECHO "</PRE>";
//2- TẠO CÁC BIẾN LƯU THÔNG TIN LỖI VÀ VALIDATE VÀ KẾT QUẢ THÀNH CÔNG
$ERROR='';
$RESULT='';
//3- KIỂM TRA XEM FORM ĐÃ ĐƯỢC SUBMIT HAY chưa, chỉ xử lí khi form submit vì khi đó biến $_GET VÀ $_POST MỚI CÓ GIÁ TEIJ
//SỬ DỤNG HÀM ISSET() ĐỂ KIỂM TRA 1 BIẾN HAY MẢNG ĐÃ TỪNG TỒN TẠI HAY CHƯA
// luôn giựa vài name của submit để check nếu
//if (isset($_GET['submit'])) is true
if (isset($_GET['submit']))
{
//    gán biến  cho đỡ phải dùng $_GET CHO DÀI DÒNG
    $name =$_GET['name'];
//    xử lý validate cho form
//    validate như sau :
//    +name không được để trống dùng emtry() để check
//    +name phải có độ dài lớn hơn 6 sử dụng strlen() check
//    khi có lỗi gán cho biến $ERROR
    if(empty($name))
    {
        $ERROR='name hổng được để rỗng bé ưi';
    }
    elseif (strlen($name)<6)
    {
        $ERROR='name hổng được nhở hơn 6 kí tự bé ưi';
    }
//    5 - xử lý lo gic chỉ khi nào không có lỗi nào xảy ra biến $ERROR=''
    if(empty($ERROR))
    {
        $RESULT = "tên vừa nhập :$name";
    }
//    6- hiển thị lỗi và kết quả ra form
//    7- nên có bước đổ lại dữ liệu mà user đã nhập ra form tăng tính năng trực quan với user hơn
}

?>
<h3 style="color: red">
    <?php echo $ERROR; ?>
</h3>
<h3 style="color: blue">
    <?php echo $RESULT; ?>
</h3>
<form action="" method="get">
    nhập tên của bạn:
    <input type="text" name="name" value="<?php echo isset($_GET['name']) ? $_GET['name']: '' ?>">
    <br>
    <input type="submit" name="submit" value="show thông tin">
</form>
