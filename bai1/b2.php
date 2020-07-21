<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap.min.css'>
    <script src='jquery-3.5.1.min.js'></script>
    <script >
        $('document').ready(
            function () {

                $('#form').submit(
                  function () {
                      var a=$('#a').val();
                      $('#result').html(a);
                      event.preventDefault();
                  }
                );
            }
        );
    </script>
</head>
<body>
<?php
$a='tran cong son';
$gmail='sont457@gmail.com';
$phone=3423423424;

echo"
<div class='container'>
    <form id='form'>
        <div class='form-row'>
            <div class='col-4'>
                <input type='text' class='form-control' placeholder='$a' id='a' value='$a' >
            </div>
            <div class='col-4'>
                <input type='text' class=\"form-control\" placeholder='$gmail' id='c'>
            </div>
            <div class=\"col-4\">
                <input type=\"text\" class=\"form-control\" placeholder='$phone' id='b'>
            </div>
        </div>
        <div class='form-row'>
          <button type=\"submit\" class=\"btn btn-primary\" id='a1'>send infor</button>
          </div>
    </form>
    <h1 id='result'> </h1>
    
</div>";
?>
</body>

</html>
