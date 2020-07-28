<?php

?>
<!--nhúng thư viện jquery vào -->
<Script type="text/javascript" src="js/jquery-3.5.1.min.js"></Script>
<Script type="text/javascript" src="js/main.js"></Script>
<form action="" method="post" enctype="multipart/form-data" id="form">
    Nhập tên danh mục:
    <input type="text" name="name" value="" />
    <br />
    Nhập mô tả:
    <textarea name="description" cols="15"></textarea>
    <br />
    Tải ảnh đại diện
    <input type="file" name="avatar" />
    <br />
    <input type="submit" name="submit" value="Lưu" />

</form>
