<?php
//demo 1 số thao tác đọc ghi file
//thao tác đọc ghi file trong thực tế có thể gặp ở các chức năng như :import file (.csv,.txt,.docx,.xlsx)
//php cung cấp 1 số hàm có sãn cho việc đọc ghi file
//fopen, fwrite,file,file_get_contents,file_put_contents
//hiện tại sẽ sử dụng 3 hàm file,file_get_contents,file_put_contents
//file,file_get_content -> đọc nội dung file
//file_put_contents ->ghi nội dung vào file
//1- đọc nội dung file:
//có hai kiểu đọc: dọc theo từng dòng hoặc đọc theo toàn bộ nội dung
//đọc nội dung file read.txt theo từng dòng, đay là kiểu đọc nội dung thông dụng nhất
//hàm file trả về 1 mảng đọc theo từng dòng
$files = file('read.txt');
echo "<pre>";
print_r($files);
echo "<pre>";
foreach ($files as $file)
{
    echo "$file <br>";
}
// đọc toàn bộ nội dung file sử dụng file_get_contents();
$content=file_get_contents('read.txt');
var_dump($content);
//$vne = file_get_contents('https://vnexpress.net/');
//var_dump($vne);
$files =file('bt6.csv');
echo "<pre>";
print_r($files);
echo "<pre>";
?>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>gender</th>
        <th>status</th>
        <th>created at</th>
    </tr>
    <?php
    foreach ($files as $file):
    ?>
<!--    cần chuyển chuỗi về mảng các phần tử-->
    <?php $arr_infor =explode(',',$file);

        echo "<pre>";
print_r($arr_infor);
echo "<pre>";
        ?>
    <tr>
      <td><?php echo "$arr_infor[0]"?></td>
      <td><?php echo "$arr_infor[1]"?></td>
      <td><?php echo "$arr_infor[2]"?></td>
      <td><?php echo "$arr_infor[3]"?></td>
      <td><?php echo "$arr_infor[4]"?></td>
      <td><?php echo "$arr_infor[5]"?></td>
    </tr>
    <?php
    endforeach;
    ?>
    ?>
</table>
<?php
//demo ghi file trong php
// việc ghi nội dung có hai kiểu  ghi đè và ghi thêm vào file
//sử dung file_put_contents()
//theo kiể ghi đè
file_put_contents('write.txt','ghi đè file');
//ghi thêm vào file giữ nguyên nội dung cũ

file_put_contents('write.txt','<br>ghi thêm nội dung',FILE_APPEND);
//1 số hàm khác thao tác với thư mục
//xóa file write.txt
//sử dụng dấu @ để tránh lỗi do file không tồn tại
@unlink('write.txt');
//kiểm tra đường dẫn file thư mục đã tồn tại hay chưa
//file_exists
$is_exist=file_exists('read.txt');
var_dump($is_exist);
//tạo thư mục mkdir()
mkdir('con bo');

?>
