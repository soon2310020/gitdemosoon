<?php
/**
 * Created by PhpStorm.
 * User: soon231020
 * Date: 6/27/2020
 * Time: 1:41 PM
 */
function tinh($n)
{
    if($n==1)
        return 1;
    else
        return 1/$n+tinh($n-1);
}
echo tinh(4);
?>