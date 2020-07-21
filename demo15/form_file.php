<?php
//demo xử lý file theo form
// nếu trong form của  bạn mà có inout type là file thì khi đó thẻ form  bắt buộc có 2 điều kiện sau
//phương thức của form phải là post
//phải thêm cặp thuộc tính và giá trị cho thẻ form
//enctype ='multipart/form-data'
//php đã có sẵn 1 biến lưu toàn bộ thông tin liên quan đến file upload , là $_FILE chứ không phải $_post
//thêm thuộc tính multiple để up nhiều file một lúc thuộc tính name của input file sẽ có dạng mảng, <input type='file',
//name='upload
//xử lý submit form
//1- tạo các biến lưu lỗi và kết quả
$err ='';
$res='';
//echo "<pre>";
//print_r($_FILES);
//echo "<pre>";
//mảng $_file là mảng hai chiều có dạng
//+name: tên file upload
//+type: kiểu dữ liệu của file
//+tmp_name: đường dẫn của file upload , khi up file
//xampp đã tự động chuyển file đó vào một thư mục tạm c=do xampp quản lý
//+error: trạng thái khi upload 0:up thành công1:vượt quá dung lượng cho phép  2:vượt quá số file cho phép
//chỉ cần quan tâm đến giá trị bằng 0
//size: đơn vị của file uload
if(isset($_POST['submit']))
{
//    tạo ra biến trung gian
    $upload =$_FILES['upload'];
//    xử lý validate
//    +file upload phải có định dạng ảnh png,jpg,gì,jpeg
//    +file không được vượt quá 0.1mb
//    khi xử lý file luôn kiểm tra nếu có file up lên mới xử lý được
    if($upload['error']==0)
    {
//         xử lý cho file upload có dạng ảnh
        $extension =pathinfo($upload['name'],PATHINFO_EXTENSION);
//        var_dump($extension);
        $extension=strtolower($extension);
//        khai báo 1 mảng chứa các đuôi file hợp lệ
        $extension_allowed=['jpg','png','gif','jpeg'];
        $file_size_mb=$upload['size']/1024/1024;
        $file_size_mb=round($file_size_mb,4);
        var_dump($file_size_mb);
        if(!in_array($extension,$extension_allowed))
        {
            $err='phải upload file là ảnh';
        }
        else if($file_size_mb>6)
        {
            $err='file không được vượt quá 2MB';
        }
//       nếu cup thành công tạp thư mục upload , sau đó tải file vào thư mục đó

    }
    else
    {
        $err='chưa up file';
    }
    if(empty($err))
    {
        if($upload['error']==0)
        {
            $path_uploads='uploads';
//            lưu ý thêm ký tự / trc trên thư ,ục định tạ thì sex tạp ra thuwmujc upload ngay bên dưới thư mục htdocs
//            xử lý thư mục uploads bằng code
//            chỉ tạo nếu cần , nó chưa hề tồn tjao sử dụng file exist để check
            if(!file_exists($path_uploads))
            {
                //tạo thư mục bằng code
                mkdir($path_uploads);

            }
//            lưu ý ng dùng có thể upload một file trên máy tính của họ nhiều lần phải xử lý tất cả các file mang tính duy nhất để đảm bả
//            file không bị trùng, tránh việc ghi đè có thể dùng hàm time() để trả về thời gian hiện tại tịn bằm sau đó nối với tên file để mang tính duy nhất
            $file_name=time().'-'.$upload['name'];
//            var_dump($file_name);
//            chuyển file tương ứng sang lưu vào thư mục đã tạo
//            dùng hàm move_uploaded_file();
            move_uploaded_file($upload['tmp_name'],$path_uploads.'/'.$file_name);
            $res.="tên file: $file_name";
            $res.="<br>ảnh đại diện<br><img src='uploads/$file_name'height='60'/>";
            $res.="<br>";
            $res.="đuôi file: $extension";
            $res.="<br>";
//            lấy ra đường dẫn vật lý đang lưu file
//            trả về đường dẫn gần nhất chứa file gọi hằng naft
            $res.="đường dẫn vật ký".__DIR__.'/'.$file_name;
        }
    }
    echo "<span style='color: red'>$err</span>";
    echo "<span style='color: red'>$res</span>";
}

?>

<form action="" method="post" enctype="multipart/form-data"/>
    <input type="file" name="upload">
    <br/>
    <input type="submit" name="submit" value="upload"/>

</form>
