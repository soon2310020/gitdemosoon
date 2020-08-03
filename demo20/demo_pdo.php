<?php
//DPO-PHP data object : cơ chế kết nối cơ sở dữ liệu
//chỉ hỗ trọ mysql
//sử dụng hoàn toàn cú pháp của oop để code , khác vs code thuần và oop
//2-demo  các chức năng crud  danh mục sử dụng dpo
//DPO hỗ trợ cơ chế truyền giá trị vào  câu truy vấn theo kiểu tham số giúp chống dc lỗi bảo mật SQLinjection
//trong csdl này tạo bảng categories có ba trường id name amount
//sử dụng DPO tương tác với csdl
//1- kết nối với csdl, khởi tạo kết nối
//const DB_DNS='';
//DSN- data source name chuỗi khai báo cơ chế dpo
//<tên-driver-csdl>:host=<ten-host>;dbname=<tên-db>;port=<port>
//charset=utf8
const DB_DSN = 'mysql:host=localhost;dbname=php0520e_dpo;port=3306;charset=utf8';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
//thực hiện kết nối- khởi tjao từ 1 dối tượng từ class pdo có sẵn của php cần truyền các hía trị khởi tạo cho class này
//nê sử dụng khối lệnh try catch để bắt các ngaoji lệ liên quan đến kết nối
try {
    $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
} catch (exception $e) {
    die("lỗi kết nối :" . $e->getMessage());
}
//echo "<h1>kết nối thành công</h1>";
//2-demo thêm dữ liệu vào bảng categories
//thay vì truyền kiểu giá trị thật vào câu truy vấn nên truyền tham số tránh dc lỗi SQLinjection
//giúp cho code đơn giản hơn vì không phải nối chuỗi các giá trị
//tạo câu truy vấn dựa trên câu truy vấn trên sử dụng phương thức prepare trên đối tượng kết nối

$sql_insert = "insert into categories(`name`,`amount`) values (:name,:amount)";
$obj_insert = $connection->prepare($sql_insert);
//echo "<pre>";
//print_r($obj_insert);
//echo "</pre>";
//trong trường hợp câu truy vấn truyền kiểu tham số mảng này sẽ có số phần tử mảng bằng số lượng tham số trong câu truy vấn ,key bằng tên tham số và value
//bằng giá trị của bạn
$arr_insert =
    [
        ':name' => 'sơn1',
        ':amount' => 4
    ];
//sử dụng phương thức excuse thực thi truy vấn trên ffoosi tượng
$is_insert = $obj_insert->execute($arr_insert);
var_dump($is_insert);
//cập nhập name =new amount bằng 3 với id =1;
$sql_update = "update categories set `name`=:name,`amount`=:amount where  id=:id";
//+tạo đối tượng truy vấn từ câu truy vấn
$obj_update = $connection->prepare($sql_update);
//tạo mảng truyền tham số
$arr_update =
    [
        ':name' => 'new',
        ':amount' => 123,
        ':id' => 1
    ];
$is_update =$obj_update->execute($arr_update);
//trong trường jowjp debug thì dùng phương thức
//$obj_update->debugDumpParams();
var_dump($is_update);
//viết câu truy vấn không cần sử dụng tham số nếu như biết chắc chắn giá trị ý là số
//do lỗi sql injection chỉ xảy ra với số
$sql_delete ="delete from categories where id>6";
$obj_delete =$connection->prepare($sql_delete);
$is_delete=$obj_delete->execute();
var_dump($is_delete);
//5-truy vấn lấy dữ liệu :có 2 kiểu lấy :nhiều và 1
//lấy dữ liệu :lấy tất cả bản ghi trong categories
//tạo câu truy vấn
$sql_select_all = "select *from categories order by id desc ";
//tạo đối tượng try vấn ,prepare
$obj_select_all =$connection ->prepare($sql_select_all);
//do k có tham số bỏ qua bước tạo bản
//sử dụng pt excuse với câu truy vấn này k cần sử dụng kết quả trả về
//\
$obj_select_all->execute();
//sau khi excuse xong thì mới có bước cuối tả về 1 mảng mong muốn
///cần truyền hằng số class DPO , cú páp gọi hằng là biến static
$categories =$obj_select_all->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($categories);
echo "</pre>";
//tạo câu truy vấn
$sql_select_one ="select * from categories where id=1";
$obj_select_one =$connection->prepare($sql_select_one);
$obj_select_one->execute();
$category =$obj_select_one->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($category);
echo "</pre>";
?>