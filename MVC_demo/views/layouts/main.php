<?php
//mvc_demo/views/layouts/main.php
//File layout chính của ứng dụng
?>
<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<!--  Nhúng header  -->
<div class="header">
    <?php require_once 'header.php'; ?>
</div>
<div class="main-content">
    <!--  Hiển thi nội dung động  -->
<!--    do file layouts luôn nhúng trong phiowng thức của class , nên sử dụng $thí như thường -->
    <h3 style="color:red;"><?php echo $this->error;?></h3>
<?php
echo $this->content;
?>
</div>
<!--  Nhúng footer  -->
<div class="footer">
    <?php require_once 'footer.php'; ?>
</div>
</body>
</html>
