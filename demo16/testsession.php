<?php
//demo việc hiển thị biến sesion và biến thường đa khai báo ở bên kia
//1 biến khi được khai báo session thì sẽ được truy cập từ bất cứ nơi nào trên hệ thống

session_start();
echo "<pre>";
print_r($_SESSION);
echo "<pre>";
?>