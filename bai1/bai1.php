<?php

$varible1 ='1.12';
$check =is_string($varible1);
echo "$check";
$var2 =1;
$var3 =[1,2,3,[2,3],false,true];
var_dump($var3);
print_r($var3);
$var1='123abc';
$var2 = (int)($var1);
echo "<br>";
var_dump($var2);
$var1 =null;
echo "<br>";
$var2 = (string)($var1);
var_dump($var2);
?>