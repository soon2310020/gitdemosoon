<!--demo php.php-->
<?php
//khai báo vùng làm việc cho php
//1-biến
//khai báo biến có tên var giá trị bằng 1
$var =1;
$name= 'sơn';
$age=30;
//quy tắc đặt tên biến giống hệt js
//tên biến phải gợi nhớ, phải bắt đầu bởi text hoặc _
//không chứa kí tự đặc biệt
//tên biến phân biệt chữ hoa chữ thuòng
//$name và $Name là khác nhau
//2-các kiểu dữ liệu của biến
//js:number.string,object,boolean,underfined,null array
//-interger: số nguyên, phạm vi của số nguyên -2 tỉ -> 2 tỉ
$number1=1;
//hàm kiểm tra biến có phải kiểu dữ liệu int hay k
$check =is_int($number1);
var_dump($check);
//-float duoble kiểu số thực , chứa phần thập phân
$number1=1.23;
$number2=-1.23;
$check= is_float($number1);
var_dump($check);
//string được bao bởi nháy đơn hoặc nháy kép
$string1='sơn';
$string2='trần công sơn';
//lưu ý có thể hiện thị ra giá trị của chuỗi nháy đơn
$age=20;
echo "tuổi là:" . $age;// nối chuỗi dùng toán tử
echo "tuổi của tôi là: $age";
//php cho oheso bạn viết hoa viết thường thoải mái với giá trị true false
$booleean1=true;
$boolean2=False;

$check =is_bool($boolean2);
var_dump($check);
//- kiểu Null có giá trị duy nhất bằng null và viết hoa thường thoải mái
$null1 =null;
$null2 =null;
// vẫn nhận giá trị bình thường
$check =is_null($null1);
var_dump($check);
//- kiểu array hay kiểu mảng , là biến chứa nhiều giá trị tại 1 thời điểm
// sẽ có nguyên 1 buổi để học về kiểu này
//có 2 cách khai báo mảng ,[], array()
$arr1 =array(1,'strcmp',true,null,array(1,3,4));
$arr2=[1,true,null,[1,23,4]];
$check =is_array($arr1);
var_dump($check);
//không thể sử djng mảng như kiểu giuex liệu nguyrn thủy
//mà sử dụng hàm đểo xem cáu trúc của nó var_dump,print_r
var_dump($arr1);
echo '<pre>';
print_r($arr1);
echo '</pre>';
//kiểu object sẽ học ở phần hướn gđối tượng
//3 - ép kiểu dữ liệu ép
//các từ khao gép kiểu là tên đối tượng
//int,interger,boolean,string object;

$number1 =11.2;//float;

$int1 =(int)$number1;// ép sang kiểu int

//4 - hằng
//const pi=3.14;
//const max=100;
////casch 2
//define(max2,10);
//nên dùng const để khai báo hằng trong php , vì khi học về class của hướng đối tượng
//dùng từ khóa const để khai báo hằng
// không thể gán lại giá trị khác cho hằng
//5 - 1 số hằng định nghĩa sẵn trong php
//show số dogng hiện tại đang gọi đến hằng này _line_
echo "<br>";
echo __LINE__;
//đường dẫn đến file
echo "<br>";
echo __FILE__;
echo "<br>";
//đường dẫn tuyệt đối tới các thư mục cha
echo __DIR__;
//hàm trong php
// --hàm có sãn trong php nhiw is_int , var_dump
function display()
{
    echo 'code bên trong hàm display';

}
display();
// hàm có tham số
function sum($number1,$number2)
{
    echo number1+number2;

}
// hàm có tham số có giá trị mặc định
function showname ($nam='sơn')
{
    echo $nam;

}
showname();
echo "<br>";
showname('bếch');
function add($n1,$n2)
{
    return $n1+$n2;
}
echo add(1,2);
// truyền biến kiểu tham trị và tham chiếu
$number =5;
echo "<br>";
echo "biến number có giá trị bằng : $number";
function change($num)// truyền tham trị
    {
        $num=0;
        echo "<br>";
        echo "teong hàm biến bằng : $num";
    }
    // truyền tham chiếu
function changen(&$n)// truyền tham chiếu
{
    $n=0;
}
changen($number);
echo "<br> $number";
// tham chiếu là thao tác với bản gốc
//8 giới thiệu 1 số hàm có sẵn trong php
// mục đích khi làm project sẽ pải tách thành rất nhiều file nê cần phải sử dụng hàm để nhúng file này
//php cung cấp 4 hàm nhúng file : include ,require_one, require, include_once
//tạo 1 file ngang hàng tên testphp.php
//include  'testphp.php';
include  'testphp.php';
echo "test đoạn code sau có được chạy hay không";
require  'testphp.php';
echo "test đoạn code sau có được chạy hay không";
// include vaf require casch xử lý lỗi khi bạn nhúng file không tồn tại
//với include bạn vẫn chạy được lệnh sau chỉ warning
//với require  ngừng chạy
//require  'testphp.php';
//require  'testphp.php';
//require  'testphp.php';
//require  'testphp.php';
//require  'testphp.php';
require_once  'testphp.php';
require_once  'testphp.php';
require_once  'testphp.php';
require_once  'testphp.php';
require_once  'testphp.php';
require_once  'testphp.php';


?>