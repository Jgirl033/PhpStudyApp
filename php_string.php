<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-14
 * Time: 下午12:26
 * Description: PHP 字符串函数
 * Url: http://www.w3school.com.cn/php/php_string.asp
 */

/**
 * 知识点１：PHP strlen() 函数
 * strlen() 函数返回字符串的长度，以字符计
 */
echo strlen("Hello world!");
echo "<br>";


/**
 * 知识点２：PHP strpos() 函数
 * strpos() 函数返回字符串的长度，以字符计
 */
echo strpos("Hello world!","world");
echo "<br>";
if(!strpos("Hello world!","Jgirl")){
    echo "False";
}
?>