<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-15
 * Time: 下午2:26
 * Description: PHP 数组
 * Url: http://www.w3school.com.cn/php/php_arrays.asp
 */

$cars=array("Volvo","BMW","SAAB");
echo "I like ".$cars[0],"<br>";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";


/**
 * 知识点１：索引数组
 */
$cars=array("Volvo","BMW","SAAB");//索引自动分配

$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="SAAB";//索引手动设置

echo count($cars)."<br>";

$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++){
    echo $cars[$x];
    echo "<br>";
}

/**
 * 知识点２：关联数组
 */
$age=array("Peter"=>"35","Ben"=>"42","Joe"=>"43");
$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";
echo "Peter is ".$age["Peter"]." years old.<br>";

foreach ($age as $item=>$value) {
    echo "Key=".$item."Value=".$value;
    echo "<br>";
}

/**
 * 知识点３：多维数组
 */
?>