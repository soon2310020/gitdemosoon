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
            max-width: 1024px;
            margin: auto;
            border: black 1px solid;
        }
        .row1
        {
            display: flex;
            width: 100%;
        }
        .white
        {
            background: white;
            width: 12.5%;
            height: 100px;
        }
        .black
        {
            background: black;
            width: 12.5%;
            height: 100px;
        }

        .row2
        {
            display: flex;
            width: 100%;
        }
    </style>

</head>
<body>
<div class="container">
<?php for($i=1;$i<=8;$i++): ?>
    <?php if($i%2==0): ?>
 <div class="row1">
    <?php for($j=1;$j<=8;$j++): ?>
        <?php if($j%2==0): ?>
          <div class="white"></div>
        <?php else : ?>
          <div class="black"></div>
        <?php endif; ?>
    <?php endfor;?>
 </div>

    <?php else: ?>
        <div class="row2">
            <?php for($j=1;$j<=8;$j++): ?>
                <?php if($j%2==0): ?>
                    <div class="black"></div>
                <?php else : ?>
                    <div class="white"></div>
                <?php endif; ?>
            <?php endfor;?>
        </div>
    <?php endif; ?>
<?php endfor;?>
</div>
</body>