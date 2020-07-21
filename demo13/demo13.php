<?php
//kiểu dữ liệu mảng
//1 -khái niệm
//kiểu mảng là 1 kiểu dữ liệu trong php, cho phép lưu nhiều giá
//bài toán yêu cầu lưu thông tin của 500 ae
//nếu dùng kiểu dữ liệu nguyên thủy thì phải tạo 500 biến
//dùng mảng để lưu
$arr=array('a','b','c');//.....dùng cho các phiên bản dưới 5.4
//khai báo mảng sử dụng [] (phổ biến nhất)
$arr2= ['a','v','c','e','f'];
//2_key của phần tử // key của phần tử
//là giá trị dùng để xxasc định ra phần tử của mảng có thể có các thuật ngữ khác: chỉ mục ,indexes
//để lấy giá trị của phần tử bất kì cần biết key của p tử đó
//đây là khái niệm rất quan trọng khi học về mảng
//3- vòng lặp foreach
//chuyên dùng lặp mảng
// có thể dùng các vòng lặp for while để lặp mảng tuy nhiên sẽ rất ít dùng
//demo dùng vòng lặp for để lặp mảng và in ra giá trị của từng phần tử trong mảng
$arr =['a','b','c','d','e'];
$count =count($arr);
for ($i=0;$i<$count;$i++)
{
    echo $arr[$i];
}
//khi làm với các mảng phức tạp sẽ rất khó
//dùng for each để lặp mảng trên khi cần thao tác với cả key và value
foreach ($arr as $key => $value)
{
    echo " key:$key, value tương ứng :$value";
}
// cú pháp chỉ tương tác với value mà không cần thao tác với key
echo "<pre>";
foreach ($arr as $value)
    echo "giá trị của phần tử hiệ tại  = $value";
//ngoài sử dụng còn có thể sử dijng cách thủ công

echo "</pre>";
//cách debug để xem thông tin mảng key=value
echo $arr[0];
echo "<pre>";
print_r($arr);
echo "</pre>";
var_dump($arr);
//vì kiểu dữ liệu có cấ trusc nên k dùng echo hiển thị dc
//chôt lại để lấy giá trị của phần tử trong mảng có hai cashc dùng for each
//cách dùng theo key thủ công;
//4-phân loại mảng: có 3 loại chính
//mảng tuần tự , mảng số nguyên: key của các phần tử luôn là số nguyên , nếu k chỉ cu thể các key thì key sẽ bắt đầu từ 0
$num=[2,1,4,5,2];
    $num1=
        [
            1=>2,
              6=>' b',
            3=>'c',
            -1=>5
        ];
    echo "<pre>";
    print_r($num1);
    echo "</pre>";
//    for,while, do...while sẽ rất khó xử lý
foreach ($num1 as $k => $value)
{
    echo  "key:$k value:$value";
}
//mảng kết hợp : key của từng phần tử sẽ có cả dạng chuỗi
//đây là một mảng hay gặp vì nó sẽ mô tả thông tin tốt hơn
//một cách tốt hơn so với mảng tuần tự
$student
=[
    'name'=>'sơn',
    'tuổi'=>30,
'address:'=>'hải dương',
    9=>'abc'

];
foreach ($student as $a=>$item)
{
    echo "$a:$item";
}
echo "$student[tuổi]";
echo "<pre>";
print_r($student);
echo "</pre>";
//mảng đa chiều: mảng chứa 1 mảng hoawjkc nhiều mảng bên trong
//trong mảng có thể là một mảng con rồi trong mảng con đó có thể có phần tử lại là mảng con khác cứ thế
$class
=[
  'name'=>'php5020',
    'infor' => [
        'thơ'=>[
        'tình trạng hôn nhân '=>'nhiều Bf',
        'sđt'=>'231412414111',
        'address'=>'vĩnh phúc'
        ],
        'du'=>
        [
            'tình trạng hôn nhân '=>'nhiều Bf',
            'sđt'=>'231412414111',
            'address'=>'vĩnh phúc'
        ]
    ]
];
//lý do foreach cho phù hợp
foreach ($class as $key => $values)
{
    echo "$key  ";
    echo "<pre>";
print_r($values);
echo "</pre>";
}
echo $class['infor']['du']['sđt'];
//demo 6
$arr=[12,50,60,12,35,23,21,33];
$sum =0;
$mul =1;
foreach ($arr as $k => $item)
{
   $sum+=$item;
   $mul*=$item;
}
echo "tổng các phần tử $sum";
echo "tích các phần tử $mul ";
//Thự hành 2:
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$red = $arrs[0];
$blue = $arrs[1];
$orange = $arrs[2];
$whlie = $arrs[3];
$str ="Màu <span class='red'>$red</span> là màu yêu thích của Anh, <span class='red'>$while</span> 
là màu yêu thích của Sơn, <span class='red'>$orange</span> là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu trắng";
$arr=['php','html','css','js'];
echo " <table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>";
echo " <th>tên khóa học</th>";

   echo " </tr>";
   foreach ($arr as $value)
   {
       echo "<tr>";
       echo " <td>$value</td>";
       echo " </tr>";
   }
echo "</table>";
//sử dụng cú pháp viết tắt của foreach
//?>
<table border='1' cellpadding='8' cellspacing='0'>
    <tr>
        <th>tên khóa học</th>
    </tr>
    <?php    foreach ($arr as $value): ?>
        <tr>
        <td style="text-align: center;"><?php echo"$value" ?></td>
    </tr>
    <?php endforeach; ?>
</table>
