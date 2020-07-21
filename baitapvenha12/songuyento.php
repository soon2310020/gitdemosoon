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

            display: flex;
            flex-wrap: wrap;

        }
        .a
        {
            width: 9%;
           text-align: center;
            background: chartreuse;
            border: black 1px solid;
        }
        .b
        {
            width: 9%;
            text-align: center;
            border: black 1px solid;

        }

    </style>

</head>
<body>
<div class="container">
    <?php
    function songuyento($a)
    {
        if ($a==1)
        {
            return false;
        }
        for ($i=2;$i<=$a/2;$i++)
        {
            if($a%$i==0)
                return false;

        }
        return true;
    }
    ?>
    <?php for($i=1;$i<=100;$i++): ?>
    <?php if(songuyento($i)): ?>
       <div class="a"><?php echo "$i"; ?></div>
    <?php else:?>
    <div class="b"><?php echo "$i"; ?></div>
        <?php endif; ?>
    <?php endfor;?>
</div>
</body>