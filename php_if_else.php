<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-14
 * Time: 下午3:37
 * Description: if...else...elseif 语句
 * Url: http://www.w3school.com.cn/php/php_if_else.asp
 */

/**
 * 知识点１：if 语句
 */
if(strpos("Hi,Jgirl!","John")){
    echo "Yes<br>";
}

$t=date("H");//获得当前小时数
if($t<"20"){
    echo "Have a good day!<br>";
}

/**
 * 知识点２：if...else 语句
 */
$t=date("H");
if($t<"20"){
    echo "Have a good day!<br>";
} else{
    echo "Have a good night!<br>";
}

/**
 * 知识点２：if...elseif....else 语句
 */
$t=date("H");
if($t<"10"){
    echo "Good morning!<br>";
}elseif($t<"20"){
    echo "Good afternoon!<br>";
}else{
    echo "Good evening!<br>";
}
?>