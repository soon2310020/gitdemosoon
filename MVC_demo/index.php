<?php
/**
 * 1- mục đích xây dựng 1 ứng dụng web crud dangh mục
 * duwjja trên mô hình mvc thuần
 * 2-tạo cơ sở dữ liệu php0520e-mvc
 * 3-tạo bảng
 * +với mô hình MVC các bạn sẽ code file đầu tiên index.php gốc vủa ứng dụng
 * +file index gốc sẽ là nơi đầu tiên nhận được các request user gửi lên ,sau đó nó sẽ phân tích url và sẽ gọi đúng controller cần thiết xử lí
 * +gọi frame work cx như cms của php đều có 1 file index gốc này
 * +về mặt code cần phân tích url của controller và action (phương thức ) nhúng class controller đó vào
 * +khởi tạo đối tượng từ controller đó dùng đói tượng đó truy cập phương thức
 * +với mô hifnh MVC là do bạn tự định nghĩa nên url cx là do bạn tự định nghĩa ra với khóa học url bắt buộc phải có định dạng như sau :
 * index.php?controller = <tên controller của bạn>&action=<tên phương thức của class>&.....
 * +với mô hình MVC luôn tư duy là đang đứng tại file index.php gốc của ứng dụng để nhúng file,luôn phải chạy ứn dụng từ file index gốc chứ không chạy thẳng file như từ trc đến giờ
 *
 * +vd 1 url cho chức năng tạo mới danh mục :
 *+vd:
 * http://localhost/MVC_demo/index.php?controller=Category&action=create
 *
 *
 */
//+lấy ra các giá trị của tham số controller/action mặc định nào đó
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
//chuyển đổi giá trị của controller thành tên file tương ứng để nhúng ,category ->categorycontroler.php ,chú ý tên file
//chuyển kí tự đầu thiên thành kí tự hóa
$controller = ucfirst($controller);
$controller .= "Controller";
//tạo đường dẫn
$path_controller = "controllers/$controller.php";
//xử lý nếu đường dẫn k tồn tại thì báo lỗi
if (!file_exists($path_controller)) {
    die("trang của bạn tìm không tồn tại");
}
require_once "$path_controller";
//khởi tạo đối tượng class
$obj =new $controller();
//trước khi truy cập phương thức $action cần phải kiểm tra tồn tại phương thức đó trong controller thì mới truy cập được
if(!method_exists($obj,$action))
{
    die("không tồn tại phương thức $action trong class $controller");
}
$obj->$action();

?>