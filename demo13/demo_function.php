<?php
//1 thao tác với mảng
// trả về tổng các phần gtuwr trong mảng
$arr =[1,2,3,4,5,6,7,8,8];
echo array_sum($arr);
// - kiểm tra xem mảng có tồn tại hay không
//array_key_exists
$arr
=
    [
        'name'=> 'sơn',
        'age'=> 30,

    ];
$check =array_key_exists('sơn',$arr);
// hàm gộp mảng , trả về 1 mảng
$arr1 =[1,2,3];
$arr2=[5,6,7];
$arr =array_merge($arr1,$arr2);
echo "<pre>";
print_r($arr);
echo "</pre>";
// tìm kiếm theo giá trị của phần tử trong mảng nếu tigm thấy trả về key của phần tử đó
// tìm thấy trả về key ngc lại trả về false :
$arr =['a','b','c'];
var_dump(array_search('a',$arr));
// loại bỏ các giá trị trùng lặp trong 1 mảng :
$arr =[2,3,4,4,5,5,55,6,6,6,3,4,5,6,2,5,6,7];
$arr_unique=array_unique($arr);
echo "<pre>";
print_r($arr_unique);
echo "</pre>";
// trả về 1 mảng mới giựa vào giá trị reset hết tất cả key về giá trị mặc định4
$arr =
    [
        'name' => 'sơn',
        'age' => 19
    ];
$arr_new =array_values($arr);
// trả về mảng key
$arr_key =array_keys($arr);
// đếm phần tử mảng
$arr =[2,4,5,7,5,4,3,2];
echo count($arr);
// chuyển chuỗi thành mảng dựa vào ký tự phân tách
$string='tôi là trần công sơn';
$arr =explode(' ',$string);
echo "<pre>";
print_r($arr);
echo "</pre>";
// chuyển mảng thành chuỗi: implode
$arr =[1,2,3,4,5,6];
$string =implode('-',$arr);
echo $string;
// lấy ra giá trị của phần tử cuối cùng tring mảng
$arr =['a','b'];
echo end($arr);
// lấy ra giá trị đầu tiên
echo reset($arr);
// kiểm tra dữ liệu có phải mảng hay không
//var_dump(is_a($arr));
//lấy ra max
echo max($arr);
//lấy ra min
echo min($arr);
// xóa phần tử bất kì
$arr =
    [
        'tên '=>'sơn',
        'age'=>19,
        'gender'=>'male'

    ];

unset($arr['age']);
print_r($arr);
// hàm sắp xếp : sort , k_sort -> tìm hiểu thêm
// hàm xử lý thời gian
//lấy thời gian trên server
echo date_default_timezone_get();
date_default_timezone_set('Asia/Ho_Chi_Minh');
// lấy ra thời gian hiện tại tính bằng giây so với thời điểm
//1/1/1970
echo "<br>";
echo time();
//hàm định dạng lại thời gian theo cách dễ nhìn hơn
//date($format,$timestamp);
echo "<br>";
echo date('d-m-Y H:i:s',time());
// chuyeernd dổi thời gian đã format về số giây;
$format ="27-6-2020 20:34:60";
echo "<br>";
echo strtotime($format);
?>