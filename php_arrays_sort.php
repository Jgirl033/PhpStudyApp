<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-15
 * Time: 下午2:26
 * Description: PHP 数组排序
 * Url: http://www.w3school.com.cn/php/php_arrays_sort.asp
 */

/**
 * 在本节中，我们将学习如下 PHP 数组排序函数：
    sort() - 以升序对数组排序
    rsort() - 以降序对数组排序
    asort() - 根据值，以升序对关联数组进行排序
    ksort() - 根据键，以升序对关联数组进行排序
    arsort() - 根据值，以降序对关联数组进行排序
    krsort() - 根据键，以降序对关联数组进行排序
 */



$cars=array("Volvo","BMW","SAAB");
sort($cars);
echo $cars[0];
echo "<br>";
rsort($cars);
echo $cars[0];
echo "<br>";

$number=array(3,5,1,22,11);
sort($number);
echo $number[0];
echo "<br>";
rsort($number);
echo $number[0];
echo "<br>";

$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
asort($age);
foreach($age as $item=>$value){
    echo $value;
    echo "\t";
}
echo "<br>";

ksort($age);
foreach($age as $item=>$value){
    echo $item;
    echo "\t";
}
echo "<br>";
arsort($age);
foreach($age as $item=>$value){
    echo $value;
    echo "\t";
}
echo "<br>";
krsort($age);
foreach($age as $item=>$value){
    echo $item;
    echo "\t";
}
echo "<br>";
?>