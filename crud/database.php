<?php
//thực hiện kết nối csdl mysql sử dụng thư viện mysqli trả về 1 biến kết nối để sử dụng ở các chức năng khác
//luôn chỉ khai báo việc kết nối csdl 1 lần duy nhất sau đó các chức năng khác chỉ việc nhúng file này vào sử dụng
//thực hiện kết nối cơ sở dư liệu php0205e_crud
const DB_HOST='localhost';
const DB_USERNAME='root';
const DB_PASSWORD ='';
const DB_NAME ='php0520e_crud';
const DB_PORT =3306;
$conection =mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);
if (!$conection)
{
    die('kết nối thất bại.thông tin lỗi:'.mysqli_connect_error());

}
echo "<h2 style='color: chartreuse'>kết nối thành công</h2>";
?>