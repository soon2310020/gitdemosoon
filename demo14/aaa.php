<?php
//1-debug submitform
ECHO "<PRE>";
print_r($_POST);
ECHO "</PRE>";
//2- tạo biến err và res
$err='';
$res='';
// kiểm tra xem form đã submit chưa
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
//    $note =$_POST['note'];
////    với gender và post nếu user không tích chọn cái nào thì $_PÓst và $_GET SẼ KHÔNG BẮT ĐƯỢC
////    khi xử lí radio và check box luôn phải kiểm tra sự tồn tại của radio và checkbox
//    $gender =$_POST['gender'];
    $jobs=$_POST['jobs'];
    $country=$_POST['country'];
    if(isset($_POST['gender']))
    {
        $gender=$_POST['gender'];
        switch ($gender)
        {
            case 0:$res.="gender : nữ";
                break;
            case 1:$res.="gender : nam";
                break;
        }
    }
//    validate form
//    +user name phải có định dạng email
//    tất cả các trường không được để trống, radio/checkbox bắt buộc
//    phải chọn
    if(!filter_var($username,FILTER_VALIDATE_EMAIL))
    {
        $err='user name phải có định dạng email';
    }
    elseif(empty($username)||empty($note)||
        !isset($_POST['gender'])||!isset($_POST['jobs']))
    {
        $err='phải nhập chọn tất cả các trường';
    }
    if (empty($err))
    {
        $res="tên : $username";
        $res.="<br>note : $note";
//       với radio cần xử lý để hiển thị ra giá trị có ý nghĩa
//        để tiết kiệm dung lượng trong csdl
        if(isset($_POST['gender']))
        {
            $gender=$_POST['gender'];
            switch ($gender)
            {
                case 0:$res.="gender : nữ";
                    break;
                case 1:$res.="gender : nam";
                    break;
            }
        }
        if (isset($_POST['jobs']))
        {
            $jobs =$_POST['jobs'];
            foreach ($jobs as $job)
            {
                switch ($job)
                {
                    case 0: $res.='job :dev';
                        break;
                    case 1: $res.='job :tester';
                        break;
                    case 3: $res.='job : BA';
                        break;
                }
            }
        }
        switch ($country)
        {
            case 0: $res.="country : việt nam";
                break;
            case 1: $res.="country : việt nam";
                break;
            case 2: $res.="country : việt nam";
                break;
        }
    }
}
?>
<h3 style="color: red">
    <?php echo $err; ?>
</h3>
<h3 style="color: blue">
    <?php echo $res; ?>
</h3
<form action="" method="post">
    username:
    nhập tên của bạn:
    <input type="text" name="username" value="">
    <br>
    note:
    <textarea name="note" cols="20"></textarea>
    <br>
    gender:
    <input type="radio" name="gender" value="0"> nữ
    <input type="radio" name="gender" value="1"> nam
    <br>
    jobs:
    <input type="checkbox" value="0" name="jobs[]"> dev
    <input type="checkbox" value="1" name="jobs[]"> tester
    <input type="checkbox" value="2" name="jobs[]"> BA
    <br>
    country:
    <select name="country">
        <option value="0"> VN</option>
        <option value="1"> sứ sở 36</option>
        <option value="2"> japan</option>
    </select>
    <br>
    <input type="submit" name="submit" value="show_inform">

</form>
