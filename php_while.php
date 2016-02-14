<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php变量学习</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-14
 * Time: 下午3:58
 * Description: while 循环
 * Url: http://www.w3school.com.cn/php/php_looping.asp
 */

/**
 * 知识点１：while语句
 */
$x=1;
while($x<=5){
    echo "这个数字是：$x<br>";
    $x++;
}


/**
 * 知识点２：do...while 循环
 * 注意：不管怎样，循环都会被执行一次
 */
$x=1;
do{
    echo "这个数字是：$x<br>";
    $x++;
}while($x<=0);


/**
 * 知识点３：for 循环
 */
for($x=0;$x<=10;$x++){
    echo "数字是：$x<br>";
}

/**
 * 知识点４： foreach 循环
 */
$colors=array("red","green","blue","yellow");
foreach($colors as $value){
    echo "$value<br>";
}
?>
<body>
</html>