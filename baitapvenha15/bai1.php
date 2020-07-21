<?php
$err='';
$res='';
if(isset($_POST['submit']))
{
//    echo "<pre>";
//    print_r($_FILES);
//    echo "</pre>";
    $upload=$_FILES['file'];
    if($upload['error']==0)
    {
        $extension = strtolower( pathinfo($upload['name'],PATHINFO_EXTENSION));
        $extension_allowed =['png', 'jpg', 'gif', 'jpeg'];
        $size =round($upload['size']/1024/1024,3);
        if(!in_array($extension,$extension_allowed))
        {
            $err='file không phù hợp';

        }
        else if($size>7)
        {
            $err='file quá nặng vui lòng chọn ảnh khác';
        }
        if(empty($err))
        {
          if(!file_exists('upload'))
          {
              mkdir('upload');
          }
          $file_name=time().'.'.$upload['name'];
          move_uploaded_file($upload['tmp_name'],'upload/'.$file_name);
          $res.="upload thành công <br>";
          $res .="tên file :$file_name <br>";
          $res.="ảnh: <br>";
          $res.="<img height='200px' width='300px' src='upload/$file_name'>";
          $res.="<br>định dạng file: $extension";
          $res.="<br>đường dẫn : ".__DIR__."/upload/$file_name";
          $res.="<br>kích thước: $size MB";
        }

    }
    else
    {
        $err='vui lòng chọn file upload';
    }


}
echo "<h3 style='color: red'>$err</h3>";
//hiển thị kết quả ra màn hình
echo "<h3 style='color: green'>$res</h3>";
?>
<form method="post" action="" enctype="multipart/form-data">
    <labelL>chọn file upload</labelL><br>
    <input type="file" name="file">
    <br><input type="submit" name="submit" value="upload">
</form>
