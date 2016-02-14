<?php
/**
 * Created by PhpStorm.
 * User: jgirl
 * Date: 16-2-12
 * Time: 下午9:00
 * Description: 基础php语法
 * Detail:
 *  1.PHP 脚本以 <?php 开头，以 ?> 结尾
 *  2.PHP 文件的默认文件扩展名是 ".php"
 *  3.PHP 文件通常包含 HTML 标签以及一些 PHP 脚本代码
 *  4.PHP 支持三种注释
 *  5.PHP 除变量外,对大小写不敏感
 * Url: http://www.w3school.com.cn/php/php_syntax.asp
 */

echo "Hello World!<br>";
ECHO "Hello World!<br>";//php对大小写不敏感

$color="red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";#php中的变量对大小写敏感
?>