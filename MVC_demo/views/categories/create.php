<?php
?>
<!--action rỗng thì url submit form sẽ là index.php?controller=category&action=create-->
<form action="" method="post">
    name: <input type="text" name="name" value=""/>
    </br>
    amount: <input type="number" name="amount" value=""/>
<!--    -->
    <br>
    <input type="submit" value="save" name="submit"/>
    <br>
    <a href="index.php?controller=category$action=index">
        về trang danh sách
    </a>
</form>
