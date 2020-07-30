<?php
//lập trình hướng đối tượng -oop
//+khá khó học
//project lại dùng oop để code
//1- các phương pháp lập trình truyền thống
//lập trình tuyến tĩnh nghĩ gì code ý ,luôn gặ cascc bạn mới
//vd.viết code để tính tổng 2 số
$number1 = 5;
$number2 = 6;
$sum = $number1 + $number2;
echo $sum;
//nhược điểm code rất khó để phát triển và bảo trì
//dùng lại khó teamwork
//+ lập trình có cấu trúc
//lập trình cấu trúc viết hàm viết chia chức bằn viết tách các file
function sum($number1, $number2)
{
    return $number2 + $number1;
}

echo sum(4, 2);
//teamwork đươc code tổ chức theo cấu trúc
//nhược điểm : code sẽ tập trung vào chức năng ,nên mô tả thực tế không trực quan
//+lập trình hướng đối tượng sẽ lấy đối tượng làm trung tâm
//chính là phương pháp code hiện nay
//2 tổng quan về ôp
//lấy đối tượng làm trung tâm để phân tích và đưa ra các đặc điểm và hành vi của đối tượng đó, về mặt thuật ngữ sẽ là thuộc tính và phương thức
//về mặt lập trình cơ bản  thuộc tính là biến phương thức là hàm
//3- thuật ngữ trong oop
//lớp -class :như khuôn mẫu bản thiết kế
//giống như tạo ra 1 bản thiết kế ngôi nhà trên giấy
//cú pháp khai báo : class <tên-class-viết-hoa-chữ-cái-dầu-của-từng-từ>
//class sẽ khai báo các thuộc tính phương thức hành vi để đối tượng sinh ra từ class có chung các thuộc tính ,phương thức đó
class person
{
    public $name;

    public function run()
    {
        echo "running";
    }
}

//object - đối tượng thể hiện cụ thể của 1 class .
//class là bản thiết kế xe thì 1 object là 1 cái xe hon da 1 object khác là xe yamaha
//các đối tượng sinh ra từ class thì có tính chất giống hệt nhau
//khởi tạo đối tượng từ 1 class sử dụng từ khóa new
//1 class nó có thể truy cập được các thuộc tính phương thức của class đó ,sử dụng kí tự  ->
$obj = new person();
$obj2 = new person();
$obj3 = new person();
$obj ->name='soon';
echo $obj ->name;
//thuộc tính của class : là thuộc tính khai báo bên trong class
//hoạt động như 1 biến php thông thường ta sử dụng kí tự -> để truy cập
class NhanVien
{
    public $name;
    public $age;
    public $id;
    public $birthday;
}
$nhanvien1=new NhanVien();
//truy cập thuộc tính và gán giá trị
$nhanvien1 ->name='soon';
$nhanvien1 ->age='20';
$nhanvien1 ->id='20';
$nhanvien1 ->birthday='23-10-2000';
echo "<pre>";
print_r($nhanvien1);
echo "</pre>";

//phương thức có thể có tham số hoặc k
//có thể return hoặc k
class Student
{
    public $name;
    public $age;
    public function study()
    {
        echo 'study';

    }
    public function play()
    {
        echo 'play';

    }
}
$student1=new Student();
$student1->study();
//từ khóa this: dùng bên trong class chính là class hiện tại ,
//được dùng khi chỉ class hiện tại truy cập thuộc tính và phương thức
class Testthis
{
    public $name;
    public $age;
    public function SetName()
    {

        $this ->name='mạnh';

    }
    public function getname()
    {
        echo $this->name;

    }
}
$obj =new Testthis();
$obj ->SetName();
$obj ->getname();
//phạm vi truy cập :thể hiện việc gán tên truy cập cho thuộc tính phương rhuwscc của lớp
//có 3 từ khóa private ,protected, private
//private có phạm vi truy cập hẹp nhất
//chỉ nội bộ class mới truy cập được
//ngoài ra đối tượng khởi tạo class đó hoặc kế từ class đó cx không truy cập được
class testprivate
{
    public $name;
    private $age;
    public function show()
    {
        $this->age;
        echo 'show';
        $this->show();

    }
    private function hide()
    {
        echo 'hide';

    }

}
$obj =new testprivate();
$obj ->name='abc';
//phương thúc protected thì chỉ có thể truy cập dc từ nội bộ class và các class kế thừa các đối tượng bên ngoài không truy cập được
class TestParent
{
    public $name;
    protected $age;
    public function show()
    {
        $this->age=5;
    }
}
//khai báo 1 class kế thừa class testparent :extends
class  TestChildren extends TestParent
{
    public $id;
    public function check()
    {
//        truy cập thuộc tính này như bình thường
        $this ->age =123;
    }
}
//dùng 1 object bên ngoài xem có truy cập được không
$children =new TestChildren();
//phạm vi truy cập
//phương thức khởi tạo:là phương thức của class , sẽ được chạy ngầm khi khởi tạo đối tượng mục đích sẽ khởi tạo giá trị cho thuộc tính của class
//với phương thức khởi tạo luôn có tên =_construct
class TestConstruct
{
    public $name;
    public function __construct()
    {
        echo "phương thức khởi tạo hướng đối tượng";
        $this->name='name mặc định';
    }
}
$obj =new TestConstruct();
echo $obj->name;
//+từ khóa static bình thường muốn truy cập thuộc tính phương thức bắt buộc phải khởi taho đối tượng tuy nhiên vẫn có thể truy cập
//bằng cách set thuộc tính và phương thức ở dạng static
//để truy cập thuộc tính và phương thức sử dụng ký tự ::
class TestStatic
{
    public $name;
    public static $age;
    public function show()
    {
        echo $this ->name;

    }
    public static function showname()
    {
        echo TestStatic::$age;
    }
//    chỉ truy thuộc tính tĩnh bằng phương pháp tĩnh

}
TestStatic::$age=5;
echo TestStatic::$age=5;
//+kế thừa php chỉ hỗ trọ thừa ,1 class chỉ kế thừa từ 1 class khác tại thời điểm
//class con kế thừa thuộc tính phường thuwsca
class TestChildren
{
    public $name;

    protected $age;
    private $id;
    public function getname()
    {
        echo "name";
    }
    private function getid()
    {
        echo "name";
    }
    protected function getage()
    {
        echo "name";
    }

}
class Children1 extends TestChildren
{

}
//từ khóa abstract ,interface liên quan đến thiết kế hệ thống bạn phải hiểu hết về hệ thống mới đưa ra chisng xác class abstract interface
//abstract :class trừu tượng
abstract class TestAstract
{
    public $name;
    protected $age;

    public function show()
    {
        echo "show";

    }
//    đặc trung bởi phương thức k có nội dunng
abstract public function hide();
}
//chỉ được dùng khi kế thừa
class abs extends TestAstract
{
     public function hide()
    {
//        todo implement hide() method
    }
}
//từ khóa implement : sử dụng cho khai báo interface
//1 class có thể implememt từ interface
interface config
{
//    không thể khai báo thuộc tính interface
public function SendMail();
public function GetMail();
}
class Testconfig implements config
{
    public function SendMail()
    {
        // TODO: Implement SendMail() method.
    }
    public function GetMail()
    {
        // TODO: Implement GetMail() method.
    }
}
?>