<?php
//ECHO "<PRE>";
//print_r($_POST);
//ECHO "</PRE>";
$err='';
$res='';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone =$_POST['phone'];
    $url =$_POST['url'];
    $country=$_POST['country'];
    if(empty(@$name)||empty($email)||empty($phone)||empty($url)||!isset($_POST['jobs']))
    {
        $err='không được bỏ trống';
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $err='email sai định dạng';
    }
    else if (is_nan($phone))
    {
        $err='phone phải nhập số';
    }
    else if (!filter_var($url,FILTER_VALIDATE_URL))
    {
        $err='nhập sai địa chỉ web';
    }


    if (empty($err))
    {

        $res="đăng ký thành công";
        $res.="<br>name: $name";
        $res.="<br>email:$email";
        $res.="<br>phone number:$phone";
        $res.="<br>country:$co";
        $res.="<br>web site:$url";


        if(isset($_POST['jobs']))
        {
            $res.="<br>";
            foreach ($_POST['jobs'] as $jobs)
            {
                switch ($jobs) {
                    case 0:
                        $res .= " job: dev";
                        break;
                    case 1:
                        $res .= " job: tester";
                        break;
                    default:
                        $res .= " job: BA";
                }
            }
        }
    }
}

?>
<?php
$checked_dev='';
$checked_tester='';
$checked_BA='';
if(isset($_POST['jobs']))
{

    foreach ($_POST['jobs'] as $jobs)
    {
        switch ($jobs) {
            case 0:
                $checked_dev="checked";
                break;
            case 1:
                $checked_tester="checked";
                break;
            default:
             $checked_BA="checked";
        }
    }
}

?>
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap.min.css'>
</head>
<body>
<div class="container">
    <form method="post" action="">
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-group form-control" placeholder="your name" name="name"
                value="<?php echo isset($_POST['name'])? $_POST['name']: ''?>">
            </div>

        </div>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-group  form-control" placeholder="email" name="email"
                       value="<?php echo isset($_POST['email'])? $_POST['email']: ''?>">
            </div>

        </div>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-group  form-control" placeholder="phone number" name="phone"
                       value="<?php echo isset($_POST['phone'])? $_POST['phone']: ''?>">
            </div>

        </div>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-group  form-control" placeholder="web site" name="url"
                       value="<?php echo isset($_POST['url'])? $_POST['url']: ''?>">
            </div>

        </div>
        country:
        <select  class="form-group form-control" id="exampleFormControlSelect1" name="country" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <div class="col form-group">
        <div class="form-group form-check form-check-inline">
            jobs: <br>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="jobs[]"
            <?php echo $checked_dev?>>
            <label class="form-check-label" for="inlineCheckbox1">dev</label>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="jobs[]"
                <?php echo $checked_tester?>>
            <label class="form-check-label" for="inlineCheckbox1">tester</label>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="2" name="jobs[]"
                <?php echo $checked_BA?>>
            <label class="form-check-label" for="inlineCheckbox1">BA</label>
        </div>
        </div>
        <button style="margin: auto" type="submit" class="form-group btn btn-primary" name="submit" value="submit" >Submit</button>
    </form>
    <h3 style="color: red">
        <?php echo $err; ?>
    </h3>
    <h3 style="color: blue">
        <?php echo $res; ?>
    </h3>
</div>
</body>
