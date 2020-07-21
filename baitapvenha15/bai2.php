<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" >

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
</body>
</html>

