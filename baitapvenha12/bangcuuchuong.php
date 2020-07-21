<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>bài 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<style>
    .container
    {
        border: 1px solid black;
        max-width: 1024px;
        margin: auto;
        display: flex;
    }
   #row
   {
       width: 20%;
       border: 1px solid black;
       text-align: center;
   }
    #title
    {
        background: chartreuse;
    }

</style>
</head>
<body>
<div class="container">
<?php for ($i=1;$i<=5;$i++) :?>
    <div id="row">
        <div id="title">  <?php echo"bảng số:".($i); ?></div>
    <?php for ($j=1;$j<=10;$j++) :?>

        <div id="col">
             <?php echo"$i x $j = " .((int)($j*$i)); ?>
        </div>

    <?php endfor; ?>
    </div>

<?php endfor; ?></div>

<div class="container">
    <?php for ($i=6;$i<=10;$i++) :?>
        <div id="row">
            <div id="title">  <?php echo"bảng số:".($i); ?></div>
            <?php for ($j=1;$j<=10;$j++) :?>

                <div id="col">
                    <?php echo"$i x $j = " .((int)($j*$i)); ?>
                </div>

            <?php endfor; ?>
        </div>

    <?php endfor; ?>
</div>

</body>
</html>
