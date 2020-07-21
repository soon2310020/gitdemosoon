<?php
//demo_baisic_2.php
//1-toán tử  giống hệt js
//- toán tử số học
$number1=5;
$number2=6;
echo $number1+$number2;
echo $number2-$number1;
echo $number1*$number2;
echo $number2%$number1;
$number1++;
echo "<br>";
echo $number1;
$number2--;
echo "<br>";
echo $number2;
// toán tử so sánh:
$number2=8;
$number1=2;
echo $number1==$number2;
echo $number2>$number1;
echo $number2<$number1;
echo $number1!=$number2;
// toán tử logic kết hợp toán tử so sánh
//and: &&, or:||, not:!
$number1=5;
$number2=2;
echo $number1>0&&$number2<0;
echo $number1>0||$number2<0;
echo !($number1==0&&$number2>0);
//- toán tử gán:
$number =5;
$number+=4;
$number-=2;
$number*=5;
$number/=9;
$number%=6;
//toán tử điều kiện dùng cú ohaso ?:
//dc dùng thay cho ìf else khi been trong if else đơn giản
$number=5;
if($number>0)
    echo "number >0";
else
    echo "number <0";
// sử dung toán tử thay thế
echo $number>0? 'number lớn hơn 0':'number nhỏ hơn 0';
$number1=10;
$number2=7;
echo '<br>';
echo '<span style="color: red">';
echo "$number1+$number2=".($number1+$number2);
echo '<br>';


echo '</span>';
//câu lệnh điều kiện biểu thức switch case
//câu lệnh điều kiện : else , if, elseif
//if chỉ dùng cho 1 trường hợp duy nhất
$number1=5;
if($number1%4==0)
    echo "chạy";
//if.....else dùng cho 2 trường hợp
if($number1%2==0)
{
    echo 'number 1 chia hết cho 2';
}
else
    echo 'number 1 không chia hết cho 2';
$number1=14;
if($number1%3==0)
    echo "number 1 chia hết cho 3";
elseif($number1%5==0)
    echo "number 1 chia hết cho 5";
elseif($number1%4==0)
    echo "number 1 chia hết cho 4";
else
    echo "không cchia hết cho 3,4,5";
$number1=5;
//vd : hiển thị ra 3 hàng mỗi hàng hai cột , dựa vào điều kiện $number1 >0;
//nếu hiển thị html bằng php thì khi cấu trúc đơn giản
//
if($number1>0)
{
    echo "<table>";
    echo "<tr>";

}
?>
<!--sử dụng cú pháp viết tắt của câu lệnh điều kiện khi thực hiện mã html phức tạp -->
<?php if($number1>0): ?>
<table border="1" cellpadding="0" cellpadding="8">
    <tr>
        <td>hàng 1 cột 1</td>
        <td>hàng 1 cột 2</td>

    </tr>
    <tr>
        <td>hàng 2 cột 1</td>
        <td>hàng 2 cột 2</td>

    </tr>
    <tr>
        <td>hàng 3 cột 1</td>
        <td>hàng 3 cột 2</td>

    </tr>

</table>
<?php endif; ?>
<?php if($number1==2) :?>
<h1>number1 =2</h1>
<?php elseif($number1==3): ?>
    <h1>number1 =3</h1>
<?php elseif($number1==4): ?>
    <h1>number1 =4</h1>
<?php elseif($number1==5): ?>
    <h1>number1 =5</h1>
<?php else : ?>
    <h1>number1 khác 2,3,4,5</h1>
<?php endif; ?>

<!--biểu thức switch case -->
<!--dùng thay thế cho if else nhưng chỉ có một biến -->
<?php
$number1=4;
switch ($number1)
{
    case 1:echo 'number =1'; break;
    case 2:echo 'number =2'; break;
    case 3:echo 'number =3'; break;
    case 4:echo 'number =4'; break;
    case 5:echo 'number =5'; break;
    default:echo 'không bằng 2,3,4,5';
}
//4- vòng lặp: for, whhile ,do ...while , giống hệt javascript
// for : dùng voifng lặp xác định trước số lần lặp
for ($i=0;$i<=10;$i++)
{
    echo $i;
}
$m=1;
do
{
    echo $m;
}
while($m<0);
//từ khóa break thoát khỏi vòng lặp
for($i=1;$i<=10;$i++)
{
    if($i>=3)
        break;
    echo $i;
}
//continue bỏ qua lần lặp hiện tại chạy tới lần lặp kế tiếp nhảy tới vòng lặp kế tiếp
//- kiểu nối chuỗi , sử dụng dấu chấm
$str ="string1"." string2";
//lấy độ dài của chuỗi :strlen
echo strlen('son231020');
//- đếm số từ trong chuỗi
echo str_word_count('son tran');
echo strtoupper('con cho nay');
echo strtolower('Chư thường');
//đổi ký tự đầu của chuỗi thàn in hoa icfirst
echo ucfirst('con cho');//Con cho
// đổi các ký tự đầu tiên của từng từ thành in hoa : ucwords
echo ucwords("cái gì thế bạn ");
//cắt bỏ khoảng trắng đầu và cuối chuỗi
echo trim('aaaaaaaaaaaa                   ');
// các hàm tìm và thay thế chuỗi : str_replace
$search ='son tran';
$str ='hello son tran is son tran';
echo str_replace($search,'son',$str);

//-c ắt chuỗi
$str ='hello son';
echo  substr($str,1,6);
//tách chuỗi giựa vào kí tự phân tách :strstr
$str ='sont457@gmail.com';
echo strstr($str,'@');
//tìm vị trí xuẩ hiện của chuỗi  trong chuỗi
//ban đầu :strpos
$str ='sssdmoafoqfcmcdafweeff';
echo strpos('cmc',$str);
echo strpos('1',$str);//false
//hàm đảo ngược chuỗi :strrev
echo strrev('sadasdasd');
// kiểm tra có phải string k
is_string('áasaaaaas');
//lấy phần thập phân mong muốn :round
$number1=1.231241423525145;
echo round($number1,3);
// làm tròn lên số nguyên gần nhất
echo ceil(1.37);
//hàm làm tròn xuông thành số nguyên gần nhất:
echo floor(1.35);
echo floor(-1.35);
// lấy giá trị nhỏ nhất
echo min(3,4,1,2,4,5,6,7);
//lấy max tương tự
//căn bậc hai
echo sqrt(9);
// định dạng theo hàng nghìn hay dùng để định dạng lại giá tiền
$price =120000;
echo number_format($price);
echo number_format($price,0,',','.');

?>
<?php for ($i=0;$i<=10;$i++) :?>
<h1><?php echo $i; ?></h1>
<?php endfor; ?>

