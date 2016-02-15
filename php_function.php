<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-15
 * Time: 下午2:04
 * Description: PHP 函数
 * Url: http://www.w3school.com.cn/php/php_functions.asp
 */

/**
 * 知识点１：用户定义函数
 */
function writeMsg(){
    echo "Hello world!<br>";
}
writeMsg();


/**
 * 知识点２：PHP 函数参数
 */


function familyName($fname){
    echo "$fname Zhang.<br>";
}
familyName("Jgirl");
familyName("Hong");


//function familyName($fname, $year){
//    echo "$fname Zhang. Born in $year <br>";
//}
//familyName("Li","1975");

/**
 * 知识点３：PHP 默认参数值
 */
function setHeight($minheight=50){
    echo "The height is : $minheight<br>";
}
setHeight(350);
setHeight();

/**
 * 知识点４：返回值
 */
function sum($x,$y){
    $z=$x+$y;
    return $z;
}
echo "5+10=".sum(5,10)."<br>";
?>