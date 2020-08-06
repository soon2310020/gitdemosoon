<?php
//nhúng file datebase để sử dụng các hằng số của class
require_once 'configs/database.php';
class category
{
//khi khai báo thuộc tính cho model ,đến từ các truowfgn trong bảng
public $id;
public $name;
public $amount;
public function getContention()
{
//với cơ chế PDO thì phải viết kết nối trong try catch
    try
    {
        $connection = new PDO(database::DB_DNS,database::DB_USERNAME,database::DB_PASSWORD);
    }
    catch (Exception $e)
    {
        die("lỗi kết nối".$e->getMessage());

    }
    return $connection;
}
public function insert()
{
$connection = $this ->getContention();
//tạo câu truy ván
//    truyền giá trị tham số để tránh lỗi sql injection
    $sql_insert ="insert into categories(`name`,`amount`) values (:name,:amount)";
//    tạo đối tượng truy vấn ,prepare
    $obj_insert =$connection ->prepare($sql_insert);
//    tạo mảng để truyền giá trị cho các tham số trong câu truy vấn
    $arr_insert =
        [
          ':name'=> $this->name,
          ':amount' =>$this ->amount
        ];
//    thực thi truy vấn
    $is_insert =$obj_insert ->execute($arr_insert);
    return $is_insert;
}
}