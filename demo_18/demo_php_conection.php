<?php
// vì php và my sql là hai ngôn ngữ độc lập
//php được rất nhiều bên thứ 3 viết ra để hỗ trợ
//kết nối với csdl trong đó có mysqli
//xampp đã hỗ trợ cài thư việm mysqli này rồi
// thư viện  mysqli này hỗ trợ cả 2 cách tiếp cận theo hướng hàm thuần của php và theo lập trình hướng đối tượng tuy nhiên để dex học và dễ tiếp cận
// các bạn sẽ học theo hướng hàm thuần
//+ các framework cũng như cms thực tế sẽ ít khi dùng thư viện mysqli này để jeest nối csdl vì thư viện này chỉ hỗ trọ mysql
//thực tế sẽ dùng pdo vì cơ chế này sẽ hỗ trợ tất cả csdl trên thực tế
// tuy nhiên cơ chế này code hoàn toàn bằng lập trình hướng đối tượng
// các bước kết nối csdl
// + việc kết nối csdl từ php vào my sql thì không khó chủ yếu nằm ở kỹ năng truy vấn của chính các bạn
//các bước kết nối csdl
//1- khởi tạo kết nối
// các hàm của php khi sử dụng thư viện mysql luôn có tiền tố là mysqli
// khai báo các hằng số dùng cho việc kết nối csdl
//mặc định local sẽ là localhost

const  DB_HOST = 'localhost';
//khai báo username để kết nối vào csdl
//mặc định username = root
const  DB_USERNAME='root';
//khai báo hằng password để kết nối csdl
// mật khẩu mặc định khi cài xampp là giá trị rỗng
const DB_PASSWORD='';
//khai báo tên csdl muốn kết nối
const DB_NAME='php0520e_crud';
//khai báo rằng csdl sẽ kết nối qua cổng
const DB_port=3306;
//sử dụng hàm mysqli_conect để kết nối
$conection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_port);
if (!$conection)
{
    die("lỗi kết nối .thông tin lỗi:".mysqli_connect_error());

}
echo "<h1>kết nối thành công</h1>";
//tạo cơ sở dữ liệu php0520e_crud có các trường sau
//có bảng categories sẽ có các truowfgn sau
//id:khóa chính kiểu số tự tăng tối đa 11 kí tự
//name : tên danh mục kiểu chuỗi tối đa 255 kí tự và không cho phép null
//- description : mô tả chi tiết danh mục kiểu chuỗi không giới hạn ký tự
//-avatar: lưu tên file ảnh đại diện của danh mục , kiểu chuỗi cho phép null với các trường lưu ảnh thì thường sẽ lưu tên file ảnh
// chứ không lưu nguyên ảnh vào csdl
// created_at ngày tạo danh mục , kiểu ngày tháng , tự dộng sinh, dựa vào thời gian hiện tại

//thêm dữ liệu vào bảng categories sử dụng php
// tạo câu truy vấn insert
//ngoài ra cần bao tên trường bởi các kí tự `` để tránh lỗi vò tên trường sẽ bị trùng với từ khóa của mysql
$sql_insert ="INSERT INTO categories(`name`,`description`,`avatar`)
VALUES ('thể thao','mô tả thể thao','the_thao.jpg')";
//thực hiện câu truy vấn vừa tạo , sử dụng mysqli_query
//với các câu lệnh truy vấn insert , update ,delete thì hàm mysqli_query luôn trả về true or false
$is_insert =mysqli_query($conection,$sql_insert);
var_dump($is_insert);
//e - update dữ liệu
//update danh mục có newname cho các danh mục có id =3;
$sql_update ="UPDATE categories SET `name` ='new name' where id <3";
$is_update =mysqli_query($conection,$sql_update);
var_dump($is_update);
//truy vấn xóa dữ liệu trong php
//vd: xóa các bản ghi có id>8
$sql_DELETE ="DELETE FROM categories where  id>8";
//thực thi truy vấn , với delete trả về true false
$is_delete =mysqli_query($conection,$sql_DELETE);
var_dump($is_delete);
//truy vấn lấy dữ liệu
//tại 1 thời điểm và lấy ra 1 dữ liệu tại 1 thời điểm
//vd: lấy ttast cả bản ghi ddaxx có trong bảng categories
//- tạo câu truy vấn :
$sql_select_all ="select * from categories";
//thực thi câu truy vấn , tuy nhiên với truy vấn select thì hàm mysqli_query trả về 1 đối tượng trung gian gì đó chứ không tả về tru false
$res_all= mysqli_query($conection,$sql_select_all);
echo "<pre>";
print_r($res_all);
echo "<pre/>";
//cần thêm  1 bước để trả về 1 mảng chứa các danh mục tương ứng

$categories =mysqli_fetch_all($res_all,MYSQLI_ASSOC);

echo "<pre>";
print_r($categories);
echo "<pre/>";
foreach ($categories as $category )
{
    echo "name: ".$category['name']."<br>";
}
//demo truy vấn 1 bản ghi có id bằng 1 trong bảng categories
//tạo câu truy vấn
$sql_select_one ="select * from categories where  id =1";
$res_one = mysqli_query($conection,$sql_select_one);

//neesi câu truy vấn chỉ về đúng 1 bản ghi duy nhất thì sử dụn mảng
$category =mysqli_fetch_assoc($res_one);
echo "<pre>";
print_r($category);
echo "<pre/>";
//demo với truy vấn đếm tổng số bản ghi theo id và theo name của danh mục
$sql_count ="select count(id ) as count_id, count(name ) as count_name from categories";
//thực thi truy vấn
$res_count = mysqli_query($conection,$sql_count);
//với truy vấn count sẽ chỉ trả về bản ghi duy nhất
$count =mysqli_fetch_assoc($res_count);
echo "<pre>";
print_r($count);
echo "<pre/>";
?>