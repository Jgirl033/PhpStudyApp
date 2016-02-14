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
 * Date: 16-2-12
 * Time: 下午9:16
 * Description:　php变量
 * Detail:
 *  1.变量是存储信息的容器
 *  2.PHP 变量规则：
        变量以 $ 符号开头，其后是变量的名称
        变量名称必须以字母或下划线开头
        变量名称不能以数字开头
        变量名称只能包含字母、数字字符和下划线（A-z、0-9 以及 _）
        变量名称对大小写敏感（$y 与 $Y 是两个不同的变量）
 *  3.变量会在首次为其赋值时被创建
 *  4.PHP 有三种不同的变量作用域：
        local（局部）
        global（全局）
        static（静态）
 * Url: http://www.w3school.com.cn/php/php_variables.asp
 */


/**
 * 知识点１：Local 和 Global 作用域
 * 函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
 * 函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
 */
echo "知识点１:Local 和 Global 作用域";
$x=5;// 全局作用域
$y=3;
$txt="Hello World!";

function myTest(){
    $z=10;// 局部作用域
    echo "<p>测试函数内部的变量:</p>";
    echo "变量 z 是:$z";
    echo "<br>";
    echo "变量 y 是:$y";
}

echo "了解变量作用域";
myTest();

echo "<p>测试函数之外的变量:</p>";
echo "变量 z 是:$z";
echo "<br>";
echo "变量 y 是:$y";

/**
 * 知识点２：PHP global关键词
 * global 关键词用于访问函数内的全局变量
 * PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。
 * 下标存有变量名。
 * 这个数组在函数内也可以访问，并能够用于直接更新全局变量。
 */
echo "<p>知识点２：PHP global关键词</p>";
$a=5;
$b=10;
function globalTest(){
    global $a,$b;
    $b=$a+$b;
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

echo "测试global关键词<br>";
globalTest();
echo $b;
echo "<br>";
echo $y;
echo "<br>";

/**
 * 知识点３：PHP static 关键词
 * 有时我需要不删除某个局部变量
 * 每当函数被调用时，这个变量所存储的信息都是函数最后一次被调用时所包含的信息。
 */
echo "<p>知识点３：PHP static 关键词</p>";
function staticTest() {
    static $m=0;
    echo $m;
    $m++;
}
staticTest();
echo "<br>";
staticTest();
echo "<br>";
staticTest();
echo "<br>";
echo $m;//static关键词的变量只能在函数内部被使用
?>


</body>
</html>