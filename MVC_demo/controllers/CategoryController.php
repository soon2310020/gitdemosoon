<?php
require_once 'model/category.php';
class CategoryController
{
//    thuộc tính chỉ chứa nội dung view động cái này sẽ được hiển thị trong file layouts
//tạo phương thức thêm mới tên là create
public $content;
//xây dựng phương thức lấy nội dung view
//từ đường dẫn cho trước
//tác với biến từ controller truyển sang view
//đường dẫn tới file lưu ,$variables là một mảng chứa các biến sẽ xử lí views đó
public $error;


public function render ($view_path,$variables =[])
{
    $render_view='';
//    để sử dụng các biến bên trong views ,cần phải nén biến đó
    extract($variables);
//    bắt đầu ghi nhớ đọc nội dung file view
    ob_start();
//   nhúng file vào để đọc
    require_once "$view_path";
//    kết thúc việc đọc view bằng hàm
    $render_view=ob_get_clean();
    return $render_view;
}
public function create()

{
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if (isset($_POST['submit']))
    {
//        tạo biến trung gian
        $name =$_POST['name'];
        $amount =$_POST['amount'];
        //validate form không đươc để trống cả hai trường
        if (empty($name)||empty($amount))
        {
            $this->error='không được để trống các trường ';
        }
//        xử lí lưu dữ liệu chỉ khi không có lỗi xảy ra
        if (empty($this->error))
        {
//lưu vào csdl , sẽ gọi model để model lưu
//            nhúng model category vào đầu file

            $category_model =new category();
//            gán các giá trị từ form cho các thuộc tính của model
            $category_model ->name =$name;
            $category_model ->amount=$amount;
            $is_insert =$category_model->insert();
            var_dump($is_insert);
            if ($is_insert)
            {
                $_SESSION['success']="thêm mới thành công";
                header('location:index.php?controller=category&action=index');
                exit();

            }
        }
    }
//    việc xử lí form luôn viết ở phần hiển thị layouts
    $this->content=$this->render("views/categories/create.php");
    echo "form thêm mới danh mục";
//    +gọi view để hiển thị ra form thêm mới
//không nên gọi thẳng view ra ,mà gọi file layout
//    xử lí nội dung views ffawjt đúng vào vị trí nội dung trong file layouts
    require_once 'views/layouts/main.php';

}
public function index()
{
    echo "bảng danh mục ";
}
}