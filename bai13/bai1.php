<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
function tinhtong($arr)
{
    $sum=0;
    foreach ($arr as $value)
    {
        $sum+=$value;
    }
return $sum;
}
function tinhtich($arr)
{
    $mul=1;
    foreach ($arr as $value)
    {
        $mul*=$value;
    }
    return $mul;
}
echo tinhtong($arrs);
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$arr = array_merge(array_values($keys),array_values($values));
print_r($arr);
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100,  -125, 0];
foreach ($array as $value)
{
    if($value >100&&$value <200&&$value %5==0)
    {
        echo $value;
    }
}
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$max=0;
$maxx=0;
foreach ($array as $value)
{

    if(strlen($value)>$max)
    {
         $maxx=$value;
         $max=strlen($value);
    }
}
echo $maxx;
$array = array(1, 2, 3, 4, 5);
function xoa(&$arr)
{

  unset($arr['3']);
   $arr= array_values($arr);
}
xoa($array);
echo "<pre>";
print_r($array);
echo "</pre>";
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];
arsort($numbers);
krsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];
$arr =
    [
        [$array2[0],$array1[0][0],$array1[0][1]],
        [$array2[1],$array1[1][0],$array1[1][1]]
    ];
echo "<pre>";
print_r($arr);
echo "</pre>";
?>